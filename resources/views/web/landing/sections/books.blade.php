<div class="container">
    <x-title title="مقترحات" coloredTitle="الكتب"
        subTitle="نوفر لك كتبًا منتقاة بعناية لتكون مرجعًا في رحلتك العلمية والدينية" />

    <!-- Swiper -->
    <div class="swiper booksSwiper">
        <div class="swiper-wrapper">

            @foreach ($books as $item)
                <div class="swiper-slide">
                    <x-cards.book :data="$item" :isSwiper="true" />
                </div>
            @endforeach

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- Collection Modal -->
<div class="modal fade" id="collectionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-between">
                <h5 class="modal-title">إضافة إلى مجموعة</h5>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label class="form-label">المجموعات الموجودة</label>
                    <select class="form-select" id="existingCollections">
                        <option value="">اختر مجموعة</option>
                        <option value="1">كتب الحديث</option>
                        <option value="2">المراجع الأساسية</option>
                        <option value="3">كتب التفسير</option>
                    </select>
                </div>

                <div class="separatorModal pb-5">أو</div>

                <div class="mb-3">
                    <label class="form-label">إنشاء مجموعة جديدة</label>
                    <input type="text" class="form-control mb-3" placeholder="اسم المجموعة الجديدة">
                    <input type="text" class="form-control" placeholder="وصف المجموعة (اختياري)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" id="saveCollection">حفظ</button>
            </div>
        </div>
    </div>
</div>
