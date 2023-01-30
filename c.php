<?php include("nav.php"); ?>
<div class="container">
<div class="container-title bg-light">
  <h1 class="text-center ">تقرير مساحة</h1>
</div>
<br>
<form class="row g-3 " >
<div class="col-4">
    <label for="form1Example1" class="form-label">اليوم </label>
    <input type="text" class="form-control" id="form1Example1">
  </div>
  <div class="col-4">
    <label for="form1Example1" class="form-label">التاريخ</label>
    <input type="text" class="form-control" id="form1Example1">
  </div>
  <div class="col-4">
    <label for="form1Example1" class="form-label">الموافق : </label>
    <input type="text" class="form-control" id="form1Example1">
  </div>
  <div class="col-12">
    <label for="form1Example1" class="form-label">اسم الأمين</label>
    <input type="text" class="form-control" id="form1Example1">
  </div>
  <div class="col-12">
    <label for="form1Example1" class="form-label">اسم البائع </label>
    <input type="text" class="form-control" id="form1Example1">
  </div>
  <div class="col-12">
    <label for="form1Example1" class="form-label">اسم المشتري </label>
    <input type="text" class="form-control" id="form1Example1">
  </div>
  <div class="col-12">
    <label for="form1Example1" class="form-label">مساحة الأرض : </label>
    <input type="text" class="form-control" id="form1Example1">
  </div>
  


  <div class="col-6">
    <label for="form1Example1" class="form-label">بموجب البصيرة المؤرخة </label>
    <input type="text" class="form-control" id="form1Example1">
  </div>

  <div class="col-6">
    <label for="form1Example1" class="form-label">بقلم </label>
    <input type="text" class="form-control" id="form1Example1">
  </div>

  <div class="col-12"> 
    <label for="form1Example1" class="form-label text-primary h5">  الحدود :</label>
    <hr class="text-primary m-1">
  </div>
  



  <table class="table">
  <thead>
    <tr>
      <th scope="col">البيان</th>
      <th scope="col"  class="col-3">ضلع القبلة</th>
      <th scope="col">ضلع الغرب</th>
      <th scope="col">ضلع الجنوب</th>
      <th scope="col">ضلع الشرق</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">حدود المحرر</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">حدود الواقع</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">الأطوال(1) </th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<div class="col-12"> 
     <hr class="text-primary m-1">
  </div>


<table class="table table-bordered">
  <thead >
    <tr >
      <th scope="col" class="col-5">المجاور</th>
      <th scope="col"> القبلة</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> من جهة القبلة </th>
      <td></td>
    </tr>
    <tr>
    <th scope="row"> من جهة الغرب </th>
      <td></td>
    </tr>
    <tr>
    <th scope="row"> من جهة الجنوب </th>
      <td></td>
    </tr>
    <tr>
    <th scope="row"> من جهة الشرق </th>
      <td></td>
    </tr>
   
  </tbody>
</table>



  <div class="col-12">
    <label for="form1Example1" class="form-label">مساحة الارضية</label>
    <input type="text" class="form-control" id="form1Example1">
  </div>


  <div class="col-md-4">
    <label for="inputState" class="form-label">المرفقات</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

