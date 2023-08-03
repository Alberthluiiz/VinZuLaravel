@extends('layouts.app')

@section('contenido')
    <div class="container d-flex justify-content-center align-items-center" style="height: 600px;">
        <div class="col-md-4 bg-light p-4 rounded shadow-lg" style="width: 350px;">
            <form>
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="text" placeholder="Tu Email de Registro"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password de Registro"
                        class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Crear Cuenta</button>
            </form>
        </div>
    </div>
@endsection
