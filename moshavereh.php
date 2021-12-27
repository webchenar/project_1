<?php include_once('header.php')?>












<div class="container-fluid">
        <div class="container">
            <div class="row">
             <div class="d-flex justify-content-center align-items-center title-moshavereh mt-3">
                <span class="text-center text-white p-3 my-4">مشاوره با کارشناسان نیکوثبت</span>
            </div>


    
   
            <form class="row g-3 needs-validation d-flex justify-content-between align-items-center" novalidate>
                <div class="col-lg-5 coustom-form">
                  <label for="validationCustom01" class="form-label">نام و نام خانوداگی  </label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="مثال : امیرحسین خدایی " required>
                  <div class="invalid-feedback">
                    لطفا فرم را پر کنید
                   </div>
             
                </div>

                <div class="col-lg-5 coustom-form">
                  <label for="validationCustomUsername" class="form-label">شماره تماس</label>
                  <div class="input-group has-validation">
      
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="مثال : 091765477567" required>
                    <div class="invalid-feedback">
                     لطفا شماره تلفن خود را به صورت صحیح وارد کنید
                    </div>
                  </div>
                </div>

                <div class="col-lg-5 coustom-form ">
                  <label for="validationCustom04" class="form-label">موضوع مشاوره</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">انتخاب کنید...</option>
                    <option>ثبت شرکت</option>
                    <option>تغیرات شرکت </option>
                    <option>ثبت مالکیت معنوی </option>
                    <option>ثلت شرکت پیشخوان خدمات دولت</option>
                    <option>امور ثبتی ویژه </option>
                    <option>سایر موارد</option>
      
                  </select>
                  <div class="invalid-feedback">
           لطفا یک مورد را انتخاب کنید
                  </div>
                </div>
                <div class="col-lg-5 coustom-form">
                  <label for="validationCustom05" class="form-label">جه زمانی را برای تماس مناسب میدانید؟</label>
                  <input type="text" class="form-control" id="validationCustom05" >
                </div>
                <p class="p-def">لطفا اطلاعات را به صورت صحیح وارد کنید تا کارشناسان ما در اسرع وقت با شما تماس بگیرند</p>
                <div class="mb-3 coustom-form ">
                  <label for="exampleFormControlTextarea1" class="form-label"> اگر پیامی دارید وارد کنید</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-12 coustom-form">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
              من ربات نیستم
                    </label>
                  
          
                  </div>
                </div>
                <div class="col-12 mb-5 coustom-form">
                  <button class="btn btn-submit w-100 text-white" type="submit"> ارسال</button>
                </div>
              </form> 
              
            </div>
        </div>
        
        
        
        
        
        
    </div>














<?php include_once('./footer.php') ?>