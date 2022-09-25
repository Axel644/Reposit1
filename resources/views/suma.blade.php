@extends('app')
@section('title',"Sumar dos números")
@section('content')

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <form action="{{route('suma')}}" method="POST">
                  @csrf

                  @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success')}}</h6>
                  @endif
                    
                  @error('Numero1')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                  @enderror

                  @error('Numero2')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                  @enderror

                <h2 class="fw-bold mb-2 text-uppercase">Suma</h2>
                <p class="text-white-50 mb-5">Introduce dos números para sumar</p>

                <div class="form-outline form-white mb-4">
                  <input type="number" id="typeEmailX" class="form-control form-control-lg" name="Numero1" />
                  <label class="form-label" for="typeEmailX">Número 1</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="number" id="typePasswordX" class="form-control form-control-lg" name="Numero2" />
                  <label class="form-label" for="typePasswordX">Número 2</label>
                </div>

                

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Calcular</button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

              </div>

              <div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
