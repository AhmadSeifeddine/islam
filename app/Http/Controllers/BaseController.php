<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Closure;

class BaseController extends Controller
{
    /**
     * Send a success response with the given data
     *
     * @param mixed $data The data to be returned in the response
     * @param string $message Custom success message (default: 'Operation successful')
     * @param int $code HTTP status code (default: 200)
     * @param array $additional Additional data to merge into response
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendSuccessResponse($message = 'Operation successful', $code = 200, $data = null, array $additional = [])
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if ($data !== null) {
            $response['data'] = $data;
        }

        return response()->json(array_merge($response, $additional), $code);
    }

    /**
     * Send an error response with the given message
     *
     * @param string $message Error message to be displayed
     * @param int $code HTTP status code (default: 500)
     * @param array $additional Additional data to merge into response
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendErrorResponse($message, $code = 500, array $additional = [])
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        return response()->json(array_merge($response, $additional), $code);
    }

    /**
     * Handle file upload for a model using Laravel Media Library
     *
     * @param mixed $model The model instance to attach media to
     * @param mixed $file The uploaded file
     * @param string $collection The media collection name
     * @param array $options Additional options for media upload
     * @param Closure|null $onSuccess Callback to execute after successful upload
     * @param Closure|null $onFailure Callback to execute on upload failure
     * @return mixed Returns result of onSuccess callback if upload succeeds, or onFailure result if fails
     */
    protected function handleFileUpload($model, $file, $collection, array $options = [], ?Closure $onSuccess = null, ?Closure $onFailure = null)
    {
        try {
            if ($file) {
                if ($options['clearExisting'] ?? true) {
                    $model->clearMediaCollection($collection);
                }

                $mediaItem = $model->addMedia($file);

                if (isset($options['name'])) {
                    $mediaItem->setName($options['name']);
                }
                if (isset($options['fileName'])) {
                    $mediaItem->setFileName($options['fileName']);
                }

                $mediaItem->toMediaCollection($collection);
            }

            return $onSuccess ? $onSuccess($model) : true;
        } catch (\Exception $e) {
            return $onFailure ? $onFailure($e) : $this->sendErrorResponse('Error uploading file: ' . $e->getMessage());
        }
    }

    /**
     * Generic method to store a new model instance with optional file upload
     *
     * @param string $model The model class name
     * @param array $data Data to create the model
     * @param array $options Additional options for creation
     * @param Closure|null $beforeSave Callback to execute before saving
     * @param Closure|null $afterSave Callback to execute after saving
     * @return JsonResponse
     */
    protected function storeItem($model, array $data, array $options = [], ?Closure $beforeSave = null, ?Closure $afterSave = null)
    {
        try {
            if ($beforeSave) {
                $data = $beforeSave($data) ?? $data;
            }

            $item = $model::create($data);

            if (isset($options['file']) && isset($options['collection'])) {
                $uploadResult = $this->handleFileUpload(
                    $item,
                    $options['file'],
                    $options['collection'],
                    $options['upload'] ?? []
                );
                if ($uploadResult !== true) {
                    return $uploadResult;
                }
            }

            if ($afterSave) {
                $item = $afterSave($item) ?? $item;
            }

            return $this->sendSuccessResponse(
                $options['successMessage'] ?? class_basename($model) . ' created successfully',
                $options['successCode'] ?? 200,
                $item,
                $options['additional'] ?? []
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse(
                'Error creating ' . class_basename($model) . ': ' . $e->getMessage(),
                $options['errorCode'] ?? 500,
                $options['errorAdditional'] ?? []
            );
        }
    }

    /**
     * Generic method to update an existing model instance with optional file upload
     *
     * @param string $model The model class name
     * @param mixed $id The model ID
     * @param array $data Data to update the model
     * @param array $options Additional options for update
     * @param Closure|null $beforeUpdate Callback to execute before updating
     * @param Closure|null $afterUpdate Callback to execute after updating
     * @return JsonResponse
     */
    protected function updateItem($model, $id, array $data, array $options = [], ?Closure $beforeUpdate = null, ?Closure $afterUpdate = null)
    {
        try {
            $item = $model::findOrFail($id);

            if ($beforeUpdate) {
                $data = $beforeUpdate($item, $data) ?? $data;
            }

            $item->update($data);

            if (isset($options['file']) && isset($options['collection'])) {
                $uploadResult = $this->handleFileUpload(
                    $item,
                    $options['file'],
                    $options['collection'],
                    $options['upload'] ?? []
                );
                if ($uploadResult !== true) {
                    return $uploadResult;
                }
            }

            if ($afterUpdate) {
                $item = $afterUpdate($item) ?? $item;
            }

            return $this->sendSuccessResponse(
                $options['successMessage'] ?? class_basename($model) . ' updated successfully',
                $options['successCode'] ?? 200,
                $item,
                $options['additional'] ?? []
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse(
                'Error updating ' . class_basename($model) . ': ' . $e->getMessage(),
                $options['errorCode'] ?? 500,
                $options['errorAdditional'] ?? []
            );
        }
    }

    /**
     * Generic method to delete a model instance
     *
     * @param string $model The model class name
     * @param mixed $id The model ID
     * @param array $options Additional options for deletion
     * @param Closure|null $beforeDelete Callback to execute before deleting
     * @param Closure|null $afterDelete Callback to execute after deleting
     * @return JsonResponse
     */
    protected function deleteItem($model, $id, array $options = [], ?Closure $beforeDelete = null, ?Closure $afterDelete = null)
    {
        try {
            $item = $model::findOrFail($id);

            if ($beforeDelete) {
                $result = $beforeDelete($item);
                if ($result === false) {
                    return $this->sendErrorResponse('Delete operation cancelled by pre-delete hook');
                }
            }

            $item->delete();

            if ($afterDelete) {
                $afterDelete($item);
            }

            return $this->sendSuccessResponse(
                $options['successMessage'] ?? class_basename($model) . ' deleted successfully',
                $options['successCode'] ?? 200,
                null,
                $options['additional'] ?? []
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse(
                'Error deleting ' . class_basename($model) . ': ' . $e->getMessage(),
                $options['errorCode'] ?? 500,
                $options['errorAdditional'] ?? []
            );
        }
    }

    /**
     * Generic method to retrieve a single model instance
     *
     * @param string $model The model class name
     * @param mixed $id The model ID
     * @param array $options Additional options for retrieval
     * @param Closure|null $transform Callback to transform the item before sending
     * @return JsonResponse
     */
    protected function showItem($model, $id, array $options = [], ?Closure $transform = null)
    {
        try {
            $query = $model::query();

            if (isset($options['with'])) {
                $query->with($options['with']);
            }

            $item = $query->findOrFail($id);

            if ($transform) {
                $item = $transform($item);
            }

            return $this->sendSuccessResponse(
                $options['successMessage'] ?? 'Item retrieved successfully',
                $options['successCode'] ?? 200,
                $item,
                $options['additional'] ?? []
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse(
                'Error retrieving ' . class_basename($model) . ': ' . $e->getMessage(),
                $options['errorCode'] ?? 500,
                $options['errorAdditional'] ?? []
            );
        }
    }

    /**
     * Generic method to retrieve all instances of a model
     *
     * @param string $model The model class name
     * @param array $options Additional options for listing
     * @param Closure|null $transform Callback to transform the items before sending
     * @return JsonResponse
     */
    protected function indexItems($model, array $options = [], ?Closure $transform = null)
    {
        try {
            $query = $model::query();

            if (isset($options['with'])) {
                $query->with($options['with']);
            }

            if (isset($options['where'])) {
                foreach ($options['where'] as $condition) {
                    $query->where(...$condition);
                }
            }

            if (isset($options['orderBy'])) {
                $query->orderBy($options['orderBy'], $options['order'] ?? 'asc');
            }

            $items = isset($options['paginate'])
                ? $query->paginate($options['paginate'])
                : $query->get();

            if ($transform) {
                $items = $items->map($transform);
            }

            return $this->sendSuccessResponse(
                $options['successMessage'] ?? 'Items retrieved successfully',
                $options['successCode'] ?? 200,
                $items,
                $options['additional'] ?? []
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse(
                'Error retrieving ' . class_basename($model) . ' list: ' . $e->getMessage(),
                $options['errorCode'] ?? 500,
                $options['errorAdditional'] ?? []
            );
        }
    }
}
