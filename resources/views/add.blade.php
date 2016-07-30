<!DOCTYPE html>
<html>
<head>
<title>Добавить товар</title>
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
<meta name="csrf-token" id="csrf-token" content="{{csrf_token()}}">
</head>
<body>
<div class="container">
{{Form::open(array('url' => 'additem')) }}
<h1>Добавить товар</h1>
<hr>
<div class="row">
<div class="col-md-4">
<hr>
<h3>Дополнительные изображения</h3>
<button class="add_images btn btn-primary" type="button"><i class="glyphicon glyphicon-plus"></i></button>
<div class = "containermultiimage">

</div>
<hr>
<input type="file" name="preview[]" class="multiimage"/><br>
</div>
<div class="col-md-8">
<i class="glyphicon glyphicon-arrow-left"></i> Выберите миниатюру для товара. <p class="help-block">Размер изображения 150x150px, не более 200Кб</p>
</div>
</div>
<div class="row">
<div class="col-md-8">
<label class="control-label" for="name">Название товара</label>
<input class="form-control" type="text" name="title"/>
<label for="description" class="control-label">Описание товара</label>
<textarea class="form-control" rows="4"></textarea>
<label class="control-label" for="price">Цена</label>
<input class="form-control" type="text" name="price"/>
</div>
</div>
<h2>Параметры товара</h2>
<button class="btn btn-default btn-lg" type="submit">Сохранить товар</button>
<button class="btn btn-primary btn-lg add_button" type="button">Добавить</button>
<hr>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Добавить параметр</h4>
</div>
<div class="modal-body">
<input type="text" class="form-control paramenter_modal" name="parameter" placeholder="Наименование параметра"/><br>
<input type="text" class="form-control unit_modal" name="unit" placeholder="Единица измерения"/>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
<button type="button" class="btn btn-primary save_and_close">Сохранить изменения</button>
</div>
</div>
</div>
</div>
{{ Form::close() }}
<!-- End Modal -->
<script src="{{asset('js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>