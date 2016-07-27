<!DOCTYPE html>
<html>
<head>
<title>Добавить товар</title>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
<link rel="stylesheet" href="{{asset("css/bootstrap-theme.min.css")}}"/>
<script src="{{asset("js/jquery-2.1.4.js")}}"></script>
<script src="{{asset("js/functions.js")}}"></script>
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
<h1>Добавить товар</h1>
<hr>
<div class="row">
<div class="col-md-4">
<input type="file" name="preview"/><br>
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
<hr>
<button class="btn btn-primary btn-lg add_button" type="button">Добавить</button>
</div>
</div>
<div class="row" style="margin-left:50px;margin-top:50px;">
<div class="col-md-12">
<div class="form-inline" role="form">
<div class="form-group">
<label for="parameter" class="sr-only">Параметр</label>
<div class="input-group">
<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-plus"></i></button>
</span>
<span class="input-group-btn">
<button class="btn btn-default remove_button" type="button"><i class="glyphicon glyphicon-minus"></i></button>
</span>
<select class="form-control" name="parameter">
<option value=1>Параметр 1</option>
<option value=2>Параметр 2</option>
<option value=3>Параметр 3</option>
</select>
</div>
<div class="form-group">
<label for="value" class="sr-only">Значение параметра</label>
<input class="form-control" name="value" placeholder="Значение параметра"/>
</div>
<div class="form-group">
<label for="value" class="sr-only">Единица измерения</label>
<input class="form-control" name="unit" placeholder="Единица измерения"/>
</div>
</div>
</div>
</div>
</body>
</html>