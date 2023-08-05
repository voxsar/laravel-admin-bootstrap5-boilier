@extends("flowdash::layouts.{$layout}", [
  'title' => 'Edit Account',
  'breadcrumb' => [[
    'title' => 'Account'
  ]],
  'new_button_label' => false
])

@section('content')
<div class="{{ $containerClass ?? 'container' }} page__container">
  <div class="card card-form">
    <div class="row no-gutters">
      <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Basic Information</strong></p>
        <p class="text-muted">Edit your account details and settings.</p>
      </div>
      <div class="col-lg-8 card-form__body card-body">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="fname">First name</label>
              <input id="fname" type="text" class="form-control" placeholder="First name" value="Adrian">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="lname">Last name</label>
              <input id="lname" type="text" class="form-control" placeholder="Last name" value="Demian">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="desc">Bio / Description</label>
          <textarea id="desc" rows="4" class="form-control" placeholder="Bio / description ..."></textarea>
        </div>
        <div class="form-group">
          <label for="country">Country</label><br>
          <select id="country" class="custom-select" style="width: auto;">
            <option value="usa">United States</option>
          </select>
          <small class="form-text text-muted">The country is not visible to other users.</small>
        </div>
        <div class="form-group">
          <label for="subscribe">Subscribe to newsletter</label><br>
          <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
            <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
            <label class="custom-control-label" for="subscribe">Yes</label>
          </div>
          <label for="subscribe" class="mb-0">Yes</label>
        </div>
      </div>
    </div>
  </div>

  <div class="card card-form">
    <div class="row no-gutters">
      <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Update Your Password</strong></p>
        <p class="text-muted">Change your password.</p>
      </div>
      <div class="col-lg-8 card-form__body card-body">
        <div class="form-group">
          <label for="opass">Old Password</label>
          <input style="width: 270px;" id="opass" type="password" class="form-control" placeholder="Old password" value="****">
        </div>
        <div class="form-group">
          <label for="npass">New Password</label>
          <input style="width: 270px;" id="npass" type="password" class="form-control is-invalid">
          <small class="invalid-feedback">The new password must not be empty.</small>
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input style="width: 270px;" id="cpass" type="password" class="form-control" placeholder="Confirm password">
        </div>
      </div>
    </div>
  </div>

  <div class="card card-form">
    <div class="row no-gutters">
      <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Profile Settings</strong></p>
        <p class="text-muted">Update your public profile with relevant and meaningful information.</p>
      </div>
      <div class="col-lg-8 card-form__body card-body">
        <div class="form-group">
          <label>Avatar</label>
          <div 
            class="dz-clickable media align-items-center"
            data-toggle="dropzone"
            data-dropzone-url="http://"
            data-dropzone-clickable=".dz-clickable"
            data-dropzone-files='["{{ asset('/vendor/flowdash/images/account-add-photo.svg') }}"]'>
            <div class="dz-preview dz-file-preview dz-clickable mr-3">
              <div class="avatar" style="width: 80px; height: 80px;">
                <img src="{{ asset('/vendor/flowdash/images/account-add-photo.svg') }}" class="avatar-img rounded" alt="..." data-dz-thumbnail>
              </div>
            </div>
            <div class="media-body">
              <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="desc2">Description</label>
          <textarea id="desc2" rows="4" class="form-control" placeholder="Description ..."></textarea>
        </div>
        <div class="form-group">
          <label for="social1">Social links</label>
          <div class="input-group input-group-merge mb-2" style="width: 270px;">
            <input id="social1" type="text" class="form-control form-control-prepended" placeholder="Facebook">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fab fa-facebook"></span>
              </div>
            </div>
          </div>
          <div class="input-group input-group-merge mb-2" style="width: 270px;">
            <input id="social2" type="text" class="form-control form-control-prepended" placeholder="Twitter">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fab fa-twitter"></span>
              </div>
            </div>
          </div>
          <div class="input-group input-group-merge mb-2" style="width: 270px;">
            <input id="social3" type="text" class="form-control form-control-prepended" placeholder="Instagram">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fab fa-instagram"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="customCheck1">Available for freelance?</label>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
            <label class="custom-control-label" for="customCheck1">Yes, show me as available for freelance!</label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-right mb-5">
    <a href="" class="btn btn-success">Save</a>
  </div>
</div>
@endsection

@section('head')
<!-- Dropzone -->
<link type="text/css" href="{{ mix('css/vendor/dropzone.css') }}" rel="stylesheet">
@endsection

@section('footer')
<!-- Dropzone -->
<script src="{{ mix('vendor/dropzone.min.js') }}" defer></script>
<script src="{{ mix('js/dropzone.js') }}" defer></script>
@endsection