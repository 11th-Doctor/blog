
@extends('main')
@section('title')
  | Contact
@endsection
@section('content')
  <div class="row">
      <div class="col-md-12">
          <h1>請聯絡我</h1>
          <hr>
          <form>
              <div class="form-group">
                  <label for="email" class="label-control">Email: </label>
                  <input type="text" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                  <label for="subject">主旨: </label>
                  <input type="text" name="subject" id="subject" class="form-control">
              </div>
              <div class="form-group">
                  <label for="message">訊息: </label>
                  <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="請在此輸入訊息..."></textarea>
              </div>
              <input type="submit" class="btn btn-success" value="送出訊息" \>
          </form>
      </div>
  </div>
@endsection