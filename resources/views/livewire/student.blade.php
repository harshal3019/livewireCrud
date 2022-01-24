<div>
    @include('livewire.create')
    @include('livewire.update')
  <section>
      <div class="container">
          <div class="row">
             <div class="col-md-12">
                 <div class="col-md-6">
                 @if(session()->has('message'))
                 <div class="alert alert-success">
                     {{session()->get('message')}}
                 </div>
                 @endif
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>All Student
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                                Add New Student
                            </button>
                         </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $students)
                                <tr>
                                    <td>{{$students->firstname}}</td>
                                    <td>{{$students->lastname}}</td>
                                    <td>{{$students->email}}</td>
                                    <td>{{$students->phone}}</td>
                                    <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editStudentModal" wire:click.prevent="edit({{$students->id}})">
                                    Edit</button>
                                    </td>
                                    <td>
                                      <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$students->id}})">Delete</button>
                                </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
             </div>
          </div>
      </div>
  </section>
</div>