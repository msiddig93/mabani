@extends('layouts.home')

@section('content')

    <section class="cat-box scroll-box">
        <div class="cat-box-title">
            <h2><a >الاجراءات و القوانين</a></h2>
            <div class="stripe-line"></div>
        </div>
        <!-- post-thumbnail /-->
        <div class="cat-box-content">
            <div id="slideshow40" style="height: auto;" class="group_items-box">
            <div class="pane" style="display: block;">
                إجراءات المباني :
                <br>
- -تقدیم طلب ترخیص بناء بھ البیانات الأساسیة عن القطعة والمالك یقدم لإدارة
المباني التي بدورھا تعرضھ لبعض المكاتب للتأكد من صحة البیانات مثل مكتب
تسجیلات الأراضي للتأكد من بیانات القطعة وغیرھا من المكاتب.
- یرفق مع الطلب شھادة بحث ساریة المفعول بالإضافة إلى الخرط الإنشائیة
والخرط المعماریة والتي یكون علي توقیع المھندس معتمد أي مسجل في السجل
الھندسي ولھ رقم سجل .
- بعد التأكد من صحةالبیانات یتم استخراج تصریح بناء وتكون فترتھ محدودة
یمكن تجدید تصریح في حالة أنتھا المدة وتكون ھنالك رسوم تجدید
- یبد المواطن في البناء وفقا للخرط المصدقة وإذا أراد المالك تغییر في
الخراطة لابد من تصدیق بذلك لان أي بناء یخالف الخرط المصدقة یعرض
المالك للمساءلة
- یكون ھنالك تفتیش من قبل المفتشین للمباني للتأكد من مطابقتھا للخرط
المصدقة وترخیص البناء ساري المفعول بعد البناء یسلم إخطار بتكملة البناء

            </div>
                <div class="clear"></div>
            </div>
            <div id="nav40" class="scroll-nav"></div>
        </div>
        <!-- .cat-box-content /-->
    </section>
    <section class="cat-box scroll-box">
        <div class="cat-box-title">
            <h2><a >لتحميل الاجراءات و القوانين إضغط على الرابط أدناه</a></h2>
            <div class="stripe-line"></div>
        </div>
        <!-- post-thumbnail /-->
        <div class="cat-box-content">
            <div id="slideshow40" style="height: auto;" class="group_items-box">
            <div class="pane" style="display: block;">
                <a target="_blank" href="{{ asset('law.pdf') }}">إضغط هنا لتحميل الملف</a>
            </div>
                <div class="clear"></div>
            </div>
            <div id="nav40" class="scroll-nav"></div>
        </div>
        <!-- .cat-box-content /-->
    </section>
@stop

