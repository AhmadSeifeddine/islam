@extends('web.layouts.master')

@push('styles')
    <style>
        .container {
            background: none !important;
        }
    </style>

    <style>
        .category-tag {
            background-color: rgba(212, 175, 55, 0.1);
            color: var(--gold);
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-weight: 500;
            font-size: 0.9rem;
        }
    </style>
@endpush


@section('section')
    <!-- Articles Header Section -->
    <div class="container" dir="rtl">
        <x-title title="مقالات" coloredTitle="إسلامية"
            subTitle="اكتشف مجموعة متنوعة من المقالات الإسلامية القيمة من كتّاب وعلماء موثوقين" />

        <!-- Search & Filter Section -->
        <div class="row mb-5 g-3 g-lg-6">
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

        <!-- Articles Grid -->
        <div class="row g-6">
            <!-- Article Card Template (repeated for each article) -->
            @foreach ($data as $item)
                <div class="col-lg-4 col-md-6">
                    <x-cards.article :data="$item" />
                </div>
            @endforeach

        </div>

    </div>
@endsection


@push('scripts')
@endpush
