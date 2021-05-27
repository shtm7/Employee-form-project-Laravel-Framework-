@section('content')
<h2 aling="center" > Employee Form </h2>
@if($massage= Session::get("success"))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<ul>
<form action="{{url('/employees/store')}}" method="post">
@csrf
<div class="form-row">
    <div class="col-md-4 mb-3">
     <label for="validationCustom01">Employee_Name</label>
      <input type="text" name="employee_name" id="employee_name" placeholder="name" pattren="[a-zA-Z]" title="Please enter name only text" required>
      @error('employee_name')
        <span class="text-danger">{{$message}}</span>
      @enderror
      <div class="valid-feedback">
      please enter your name
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">ID_Number</label>
      <input type="integer" name="employee_id" id="validationCustom02" value="ID" required>
      <div class="valid-feedback">
      Please enter unique ID
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Phone Number</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">05</span>
        </div>
        <input type="text" name="phone_number" id="phone_number" aria-describedby="inputGroupPrepend" pattren="[0-9]{10}" title="phone number should only 10 digites" required>
        @error('phone_number')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="invalid-feedback">
       <h3> Please enter only 10 digits</h3>
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-3 mb-3">
     <urlencode> <label for="validationCustom04">City</label>
      <select name="city" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>Riyadh</option>
        <option>Mecca</option>
        <option>Madina</option>
        <option>Al-sharqiyah</option>
        <option>Hail</option>
        <option>Qassim</option>
        <option>Al-shamal</option>
        <option>Al-janob</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
  <div data-role="main" class="ui-content">
     <fieldset data-role="controlgroup">
      <legend>Gender:</legend>
        <label for="Male">Male</label>
        <input type="radio" name="gender" id="Male" value="Male" checked>
        <label for="Female">Female</label>
        <input type="radio" name="gender" id="Female" value="Female">
       </fieldset>
  </div> 
</div>
  <button type="submit">Submit form</button>
</form> 
</div>
</ul>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use.strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection 