<style>
    @font-face {
        font-family: 'Algerian';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url({{ storage_path('fonts/Algerian.ttf') }}) format("truetype");
      }
      @font-face {
        font-family: 'Stencils';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url({{ storage_path('fonts/BelladonaStencil.ttf') }}) format("truetype");
      }
      @font-face {
        font-family: 'Verdana Itallic';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url({{ storage_path('fonts/VERDANAI.TTF') }}) format("truetype");
      }
      @font-face {
        font-family: 'Verdana Bold';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url({{ storage_path('fonts/VERDANAB.TTF') }}) format("truetype");
      }
      body {
        font-family: 'Serif';
      }
    table {
      width: 100%;
      border: 1px solid #fff;
      text-align: left;
    }
    
    th, td {
    padding: 15px;
    text-align: left;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    
    th {
      background-color: #4CAF50;
      color: white;
    }
    #main-body-div{
        border: 2px solid rgba(47,73,100,.9);
        border-radius:2px;
        padding:20px;
    }
    </style>
<div id="main-body-div">
   <div class="content-wrapper ">
    <div style="width:100%; height:100px; text-align:center" class="text-center">
        <h3 style="font-style:Algerian; font-weight:bold; color:brown;font-family:Algerian">USERS</h3>
        <h5 style="center" style="font-family:Algerian">Summary of All Users</h5>
    </div>
        <section class="content ">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-default">  
  <div class="md-form mt-0">
      </div>
      @if(count($users) > 0)
      <div class="table-responsive">
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Join Date</th>
                  </tr>
              </thead>
              @foreach($users as $k=>$v)
                  <tbody>
                      <tr>
                          <td>{{ $v->id }}</td>
                          <td>{{ $v->name }}</td>
                          <td>{{ $v->email }}</td>
                          <td>{{ Carbon\Carbon::parse($v->created_at)->format('d/m/Y') }}</td>
                      </tr>
                  </tbody>
              @endforeach
          </table>
        </div>  
        @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>