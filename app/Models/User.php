<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\HasRolesAndPermissions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Laratrust\Contracts\LaratrustUser;


class User extends Authenticatable implements HasMedia, LaratrustUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndPermissions, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function saves()
    {
        return $this->hasMany(Save::class);
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function adminWelcomeStatistics()
    {
        $models = [
            'scholars' => Scholar::query(),
            'categories' => Category::query(),
            'books' => Book::query(),
            'articles' => Article::query(),
            'youtubes' => Youtube::query(),
            'book_explanations' => Book_Explanation::query()
        ];

        $stats = [];
        $today = now()->format('Y-m-d');

        foreach ($models as $key => $query) {
            $baseQuery = $query->select('id')
                ->where('created_by', auth()->id());

            // Get total count
            $stats[$key] = (clone $baseQuery)->count();

            // Get today's count
            $stats['today_' . $key] = (clone $baseQuery)
                ->whereDate('created_at', $today)
                ->count();
        }

        return $stats;
    }
}
