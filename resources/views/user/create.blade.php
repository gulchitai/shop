@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" value="{{ old('name') }}"  name="name" type="text" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('email') }}" name="email" type="text" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('password') }}" name="password" type="text" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" type="text" placeholder="Подтверждение пароля">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('surname') }}" name="surname" type="text" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('patronymic') }}" name="patronymic" type="text" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('age') }}" name="age" type="text" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('address') }}" name="address" type="text" placeholder="Адрес">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disable selected>Пол</option>
                            <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                            <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
