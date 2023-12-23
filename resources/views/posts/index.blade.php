@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="col-md-3"></div>
        <div class="container p-3 col-md-6 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
            <form action="{{route('posts')}}"method="post" class="mb-4">
                @csrf
                <div class="form-group">
                    <label for="exampleTextarea">Body</label>
                    <textarea class="form-control bg-gray mt-2 @error('body') @enderror " id="body"name="body" cols="30"rows="4" placeholder="post something!"></textarea>
                </div>
                @error('body')
                <div class="text-danger mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Post</button>
            </form>
            @if($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">
                        <a href=""class="font-weight-bold text-decoration-none text-dark">{{$post->user->name}}</a><span class="text-success text-sm mx-2">{{$post->created_at->diffForHumans()}}</span>
                        <p class="mb-2">{{$post->body}}</p>

                        <div class="mb-2">
                            <form action=""method="post"class="mr-1">
                                @csrf
                                <button type="submit"class="btn btn-primary btn-sm">Like</button>
                                <button type="submit"class="btn btn-danger btn-sm">Unlike</button>
                            </form>
                            <span>{{ $post->likes->count() }}Likes</span>
                        </div>
                    </div>
                @endforeach

                {{ $posts->links() }}

            @else 
            <p>There are no posts</p>
            @endif
        </div>
        <div class="col-md-3"></div>

          </div>
@endsection