@csrf

        <div class="form-group">
            <div class="card w-50 mx-auto">
                <div class="card-body">
                    <h2 class="w-100 text-center">Formulario Posts Edit</h2><br>
                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Title</label><br>
                            <input type="text" name="title" class="col-8" value="{{ old('title',$post->title) }}"><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Slug</label><br>
                            <input type="text" name="slug" class="col-8" value="{{ old('slug',$post->slug) }}"><br><br>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Description</label><br>
                            <textarea name="description" class="col-8">{{ old('description',$post->description) }}</textarea><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Content</label><br>
                            <input type="text" name="content" class="col-8" value="{{ old('content',$post->content) }}"><br><br>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Category</label><br>
                            <select name="category_id" class="col-8">
                                {{-- <option {{ $post->category && $post->category->id ? 'selected' : '' }} value="">{{ $post->category->title }}</option> --}}
                                @foreach ($category as $category)
                                    {
                                    <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}"> {{ $category->title }} </option>
                                    }
                                @endforeach
                            </select><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Posted</label><br>
                            <select name="posted" class="col-8">
                                <option {{ old('posted',$post->posted) == 'yes' ? 'selected' : '' }} value="yes"> Yes </option>
                                <option {{ old('posted',$post->posted) == 'not' ? 'selected' : '' }} value="not"> Not </option>
                                {{-- <option value="yes">Yes</option>
                                <option value="not">Not</option> --}}
                            </select><br><br>
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-center mb-5">
                        <div class="col-6 text-center">
                            @if ( isset($task) && $task == 'edit')
                                <label for="">Image</label><br>
                                <input type="file" name="image">
                            @endif
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Enviar" class="btn btn-success"><br><br>
                    </div>

                </div>
            </div>
        </div>