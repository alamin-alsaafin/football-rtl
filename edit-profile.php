<?php
include 'header.php';
?>

    <section id="edit-profile-sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="title">Edit Profile</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                    <form action="">
                        <label>First Name<span>*</span></label>
                        <input type="text" placeholder="" name="">
                        <label>Family Name<span>*</span></label>
                        <input type="text" placeholder="" name="">
                        <label>Mobile number</label>
                        <input type="number" placeholder="" min="0" name="">
                        <!--<label>Country<span>*</span></label>
                        <select  name="" id=""  class="" aria-hidden="true">
                            <option value="10">أذربيجان</option>
                            <option value="6">أرمينيا</option>
                            <option value="8">أستراليا</option>
                            <option value="1">أفغانستان</option>
                            <option value="2">ألبانيا</option>
                            <option value="193">أنتيجوا و باربودا</option>
                            <option value="4">أنجولا</option>
                            <option value="189">أندورا</option>
                            <option value="181" selected="selected">أورجواي</option>
                            <option value="182">أوزبكستان</option>
                            <option value="176">أوغندا</option>
                            <option value="177">أوكرانيا</option>
                            <option value="75">أيسلندا</option>
                            <option value="55">إستونيا</option>
                            <option value="50">إكوادور</option>
                            <option value="82">إيطاليا</option>
                            <option value="56">اثيوبيا</option>
                            <option value="54">اريتريا</option>
                            <option value="157">اسبانيا</option>
                            <option value="34">افريقيا الوسطى</option>
                            <option value="5">الأرجنتين</option>
                            <option value="85">الاردن</option>
                            <option value="178">الامارات</option>
                            <option value="11">الباهاما</option>
                            <option value="12">البحرين</option>
                            <option value="24">البرازيل</option>
                            <option value="22">البوسنة</option>
                            <option value="45">التشيك</option>
                            <option value="190">الجبل الاسود</option>
                            <option value="3">الجزائر</option>
                            <option value="46">الدانمرك</option>
                            <option value="48">الدومينيك بيساو</option>
                            <option value="32">الرأس الأخضر</option>
                            <option value="145">السعودية</option>
                            <option value="53">السلفادور</option>
                            <option value="146">السنغال</option>
                            <option value="160">السودان</option>
                            <option value="163">السويد</option>
                            <option value="154">الصومال</option>
                            <option value="37">الصين</option>
                            <option value="79">العراق</option>
                            <option value="191">الفاتيكان</option>
                            <option value="133">الفلبين</option>
                            <option value="51">الكونغو</option>
                            <option value="91">الكويت</option>
                            <option value="63">المانيا</option>
                            <option value="74">المجر</option>
                            <option value="115">المغرب</option>
                            <option value="111">المكسيك</option>
                            <option value="179">المملكة المتحدة</option>
                            <option value="126">النرويج</option>
                            <option value="9">النمسا</option>
                            <option value="76">الهند</option>
                            <option value="84">اليابان</option>
                            <option value="186">اليمن</option>
                            <option value="66">اليونان</option>
                            <option value="180">امريكا</option>
                            <option value="77">اندونيسيا</option>
                            <option value="78">ايران</option>
                            <option value="80">ايرلندا</option>
                            <option value="131">باراجواي</option>
                            <option value="128">باكستان</option>
                            <option value="23">بتسوانا</option>
                            <option value="14">بربادوس</option>
                            <option value="135">برتغال</option>
                            <option value="19">برمودا</option>
                            <option value="25">بروناي</option>
                            <option value="16">بلجيكا</option>
                            <option value="26">بلغاريا</option>
                            <option value="17">بليز</option>
                            <option value="13">بنجلاديش</option>
                            <option value="129">بنما</option>
                            <option value="18">بنين</option>
                            <option value="20">بوتان</option>
                            <option value="136">بورتوريكو</option>
                            <option value="27">بوركينا فاسو</option>
                            <option value="28">بوروندي</option>
                            <option value="134">بولندا</option>
                            <option value="21">بوليفيا</option>
                            <option value="132">بيرو</option>
                            <option value="168">تانزانيا</option>
                            <option value="169">تايلند</option>
                            <option value="166">تايوان</option>
                            <option value="197">تركس و كايسوس</option>
                            <option value="175">تركمانستان</option>
                            <option value="174">تركيا</option>
                            <option value="172">ترينيداد وتوباغو</option>
                            <option value="35">تشاد</option>
                            <option value="170">توجو</option>
                            <option value="171">تونجا</option>
                            <option value="173">تونس</option>
                            <option value="192">تيمور الشرقية</option>
                            <option value="83">جامايكا</option>
                            <option value="65">جبل طارق</option>
                            <option value="39">جزر القمر</option>
                            <option value="33">جزر الكايمن</option>
                            <option value="106">جزر الملديف</option>
                            <option value="153">جزر سليمان</option>
                            <option value="57">جزر فوكلاند</option>
                            <option value="49">جمهورية الدومينيك</option>
                            <option value="155">جنوب افريقيا</option>
                            <option value="67">جواتيمالا</option>
                            <option value="62">جورجيا</option>
                            <option value="198">جويانا الفرنسية</option>
                            <option value="47">جيبوتي</option>
                            <option value="144">دوبرا</option>
                            <option value="140">رواندا</option>
                            <option value="139">روسيا</option>
                            <option value="15">روسيا البيضاء</option>
                            <option value="138">رومانيا</option>
                            <option value="187">زامبيا</option>
                            <option value="188">زيمبابوي</option>
                            <option value="41">ساحل العاج</option>
                            <option value="143">ساموا</option>
                            <option value="196">سانت فينسنت و جرينادينز</option>
                            <option value="194">سانت كيتس و نافيس</option>
                            <option value="195">سانت لوقا</option>
                            <option value="141">سانت هيلنا</option>
                            <option value="142">سانت هيلنا</option>
                            <option value="158">سريلانكا</option>
                            <option value="151">سلوفاكيا</option>
                            <option value="152">سلوفانيا</option>
                            <option value="150">سنغافورة</option>
                            <option value="162">سوازيلاند</option>
                            <option value="165">سوريا</option>
                            <option value="161">سورينام</option>
                            <option value="164">سويسرا</option>
                            <option value="149">سيراليون</option>
                            <option value="148">سيشل</option>
                            <option value="36">شيلي</option>
                            <option value="147">صربيا</option>
                            <option value="167">طاجكستان</option>
                            <option value="127">عمان</option>
                            <option value="61">غامبيا</option>
                            <option value="64">غانا</option>
                            <option value="70">غيانا</option>
                            <option value="68">غينيا</option>
                            <option value="130">غينيا</option>
                            <option value="69">غينيا بيساو</option>
                            <option value="183">فانواتو</option>
                            <option value="60">فرنسا</option>
                            <option value="81">فلسطين</option>
                            <option value="184">فنزويلا</option>
                            <option value="59">فنلندا</option>
                            <option value="185">فيتنام</option>
                            <option value="58">فيجي</option>
                            <option value="44">قبرص</option>
                            <option value="92">قرغيزستان</option>
                            <option value="137">قطر</option>
                            <option value="86">كازاخستان</option>
                            <option value="121">كالدونيا الجديده</option>
                            <option value="30">كاميرون</option>
                            <option value="42">كرواتيا</option>
                            <option value="29">كمبوديا</option>
                            <option value="31">كندا</option>
                            <option value="43">كوبا</option>
                            <option value="89">كوريا الجنوبية</option>
                            <option value="88">كوريا الشمالية</option>
                            <option value="40">كوستاريكا</option>
                            <option value="90">كوسوفو</option>
                            <option value="38">كولومبيا</option>
                            <option value="87">كينيا</option>
                            <option value="94">لاتفيا</option>
                            <option value="93">لاوس</option>
                            <option value="95">لبنان</option>
                            <option value="100">لوكسنبورج</option>
                            <option value="98">ليبيا</option>
                            <option value="97">ليبيريا</option>
                            <option value="99">ليتوانيا</option>
                            <option value="96">ليسوتو</option>
                            <option value="101">ماكاو الصينية</option>
                            <option value="108">مالطا</option>
                            <option value="107">مالي </option>
                            <option value="105">ماليزيا</option>
                            <option value="103">مدغشقر</option>
                            <option value="52">مصر</option>
                            <option value="102">مقدونيا</option>
                            <option value="104">ملاوي</option>
                            <option value="114">منغوليا</option>
                            <option value="109">موريتانيا</option>
                            <option value="110">موريشيوس</option>
                            <option value="116">موزمبيق</option>
                            <option value="112">مولدافيا</option>
                            <option value="113">موناكو</option>
                            <option value="117">ميانمار</option>
                            <option value="118">ناميبيا</option>
                            <option value="119">نيبال</option>
                            <option value="124">نيجيريا</option>
                            <option value="125">نيجيريا</option>
                            <option value="123">نيكاراجوا</option>
                            <option value="122">نيوزيلاندا</option>
                            <option value="71">هايتي</option>
                            <option value="72">هندوراس</option>
                            <option value="120">هولندا</option>
                            <option value="73">هونج كونج</option>
                            </select>-->
                        <label>Email<span>*</span></label>
                        <input type="text" placeholder="" name="">
                    </form>
                    <input type="submit" placeholder="Save" value="Save" class="saveBTN" name="">
                </div>
            </div>
        </div>
    </section>


 <?php
    include 'footer.php';
  ?>