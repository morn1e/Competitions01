<form action="{{ route('users.update', $user->id)}}"  method="POST" >
					{{ csrf_token() }}">
					<input type="hidden" name="_method" value="PUT">
						
						
									<label for="username" >
										 Name           
									</label>
									
										<input type="text" name="username" id="username" value= "{{ $user->username }}">
									
								
									<label for="email">
										Email
									</label>
									
										<input type="text" name="email" id="email" value="{{ $user->email }}">
									
									<label for=password">
										Password
									</label>
									
										<input type="password" name="password"  value="">
									</div>
								</div>
								
									<label for="name">
										Name
									</label>
										<input type="text" name="name" id="name" value="{{ $user->profile->name }}">								
									<label for="country">
										Photo
									</label>
									
										<input type="text" name="country"  class="form-control" id="country" value="{{ $user->profile->country }}">
									
								
											<button type="submit" class="btn btn-primary btn-lg">
												
												Edit Student
											</button>