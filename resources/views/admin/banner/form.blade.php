{{csrf_field()}}
<div class="form-row">
    <div class="form-group col-md-12">
        <input type="text" class="form-control"
               name="title"
               value="{{$banner ? $banner->title : old('title')}}"
               placeholder="Наименование"
               id="title"
               required>
        <label class="form-control-plaintext" for="title">Пожалуйста введите название курса</label>
    </div>
</div>


<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control" name="location_id" id="location_id">
                @foreach($locations as $location)
                    <option {{$banner->location_id == $location->id ? ' selected ': ''}}
                            value="{{$location->id}}">
                        {{$location->name}}
                    </option>
                @endforeach
            </select>
            <label class="form-control-plaintext" for="news_id">Пожалуйста выберите локацию</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control" name="news_id" id="news_id">
                @foreach($news as $n)
                    <option {{$banner->news_id == $n->id ? ' selected ': ''}}
                            value="{{$n->id}}">
                        {{$n->title}}
                    </option>
                @endforeach
            </select>
            <label class="form-control-plaintext" for="news_id_id">Пожалуйста выберите новость</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input class="form-control" type="file" name="image" id="image" accept="image/*">
            <label class="form-control-plaintext" for="image">Пожалуйста выберите фото</label>
        </div>
    </div>
</div>
<div class="form-group col-md-12 text-right">
    <button class="mb-2 btn btn-primary mr-1" type="submit">Сохранить
        <i class="material-icons md-12">check_circle</i>
    </button>
</div>


@include('admin.layouts.parts.error')
