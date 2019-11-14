@extends('layouts.app')

@section('content')

          <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data" >
              {{ csrf_field() }}

              <div class="form-group">
                <label for="exampleInputEmail1">タイトル</label>
                <input type="text" class="form-control" id="exampleInputEmail1"   placeholder="タイトル" name="title">
              </div>

              <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                  <option selected ="">選択する</option>
                  <option value="1">room</option>
                  <option value="2">monster</option>
                  <option value="3">visual</option>
                </select>
              </div>

              <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
              </div>

              <input type="hidden" name="user_id" value="{{ Auth::id() }}">

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>


@endsection
