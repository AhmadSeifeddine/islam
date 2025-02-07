@extends('web.layouts.master')

@push('styles')
@endpush


@section('section')
    <div class="container" dir="rtl">
        <x-title title="كتب" coloredTitle="إسلامية"
            subTitle="اكتشف مجموعة متنوعة من الكتب الإسلامية القيمة من علماء وفقهاء موثوقين" />

        <!-- Search & Filter Section -->
        <div class="row mb-5 g-4 g-lg-6">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 h-100 rounded-4">
                    <input type="text" class="form-control border-0 shadow-sm py-3 px-4 fw-medium"
                        placeholder="ابحث عن مقال..." style="border-radius: 0.5rem;">
                </div>
            </div>
            <div class="col-lg-3">
                <select class="form-select shadow-lg border-0 py-3 px-4 fw-medium">
                    <option selected>تصنيف المقالات &nbsp;</option>
                    <option value="1">العقيدة (24)</option>
                    <option value="2">الفقه (18)</option>
                    <option value="3">السيرة النبوية (15)</option>
                    <option value="4">التفسير (21)</option>
                    <option value="5">الأخلاق (12)</option>
                    <option value="6">التزكية (16)</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select class="form-select shadow-lg border-0 py-3 px-4 fw-medium">
                    <option selected>تصفية حسب الكاتب &nbsp;</option>
                    <option value="1">د. يوسف القرضاوي (8)</option>
                    <option value="2">د. محمد راتب النابلسي (12)</option>
                    <option value="3">د. عمر عبد الكافي (15)</option>
                    <option value="4">د. عائض القرني (10)</option>
                    <option value="5">د. طارق السويدان (7)</option>
                    <option value="6">د. عمر المقبل (9)</option>
                </select>
            </div>
        </div>

        <!-- Books Grid -->
        <div class="row g-6">
            <!-- Book Card Template (repeated for each book) -->
            @foreach ($books as $item)
                <div class="col-lg-6 col-md-12">
                    <x-cards.book :data="$item" />
                </div>
            @endforeach

        </div>
    </div>
@endsection


@push('scripts')
@endpush
