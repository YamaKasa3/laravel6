@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection


@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

        <form method="POST" action="/articles">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title"
                        value="{{ old('title') }}">
                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="except">Except</label>

                <div class="control">
                    <textarea class="textarea @error('except') is-danger @enderror" name="except"
                        id="except">{{ old('except') }}</textarea>
                    @error('except')
                    <p class="help is-danger">{{ $errors->first('except') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea @error('body') is-danger @enderror" name="body"
                        id="body">{{old('body')}}</textarea>
                    @error('body')
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Tags</label>

                <div class="control">
                    <select name="tags[]" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @error('tags')
                    <p class= "help is danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection