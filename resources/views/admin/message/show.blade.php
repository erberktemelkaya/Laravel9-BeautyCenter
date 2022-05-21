@extends('layouts.adminwindow')

@section('title','Show Message')

 

  @section('content')
  
                            <nav aria-label="breadcrumb" role="navigation">
                                
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			
            <div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Detail Message Data</h4>
							
						</div>
						<div class="pull-right">
							
						</div>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
                                <th style="width: 50px">Id</th>
                                <td>{{$data->id}}</td>
                            
								
							</tr>
                           
                            <tr>
                                <th style="width: 50px">Name & Surname</th>
                                <td>{{$data->name}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Phone Number</th>
                                <td>{{$data->phone}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Email</th>
                                <td>{{$data->email}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Subject</th>
                                <td>{{$data->subject}}</td>
                            
								
							</tr>
                           
							</tr>
                            <tr>
                                <th style="width: 50px">Message</th>
                                <td>{{$data->message}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">IP Number</th>
                                <td>{{$data->ip}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Status</th>
                                <td>{{$data->status}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Created Date</th>
                                <td>{{$data->created_at}}</td>
                            
								
							</tr> 
                            <tr>
                                <th style="width: 50px">Update Date</th>
                                <td>{{$data->updated_at}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Admin Note : </th>
                                <td>
                                <form role ="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" > 
                                 @csrf   
                                <textarea class="form-control" id="note" name="note">
							    {{$data->note}}
                               </textarea>
                               <div class="card-footer">

                            <button type="submit" class="btn btn-primary">Update Note</button>
                        </div>
                                </form>


                                </td>
                            
								
							</tr>
                            
                            
                            </table>
					<div class="collapse collapse-box" id="striped-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#striped-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#striped-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre hljs" id="striped-table-code">
<span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table table-striped"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"col"</span>&gt;</span>#<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"row"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
							</code></pre>
						</div>
					</div>
				</div>
					



  @endsection