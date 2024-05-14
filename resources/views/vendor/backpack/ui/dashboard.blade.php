@extends(backpack_view('blank'))

@section('content')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div style="margin-bottom: 70px;"></div> <!-- Spacer -->
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Static Bootstrap Chart</h2>
                    <canvas id="myChart" width="900" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


