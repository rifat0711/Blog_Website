<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New SubCategory') }}
        </h2>
    </x-slot>

   

    <form method="post" action="{{ route('subcategory.store') }}">
        @csrf


        <div class="form-group">
            <label for="exampleInputEmail1"> Choice Category </label>
            <select class="from-control" name="category_id"> 
                @foreach($categories as $row)
                <option value="{{ $row->id }}" > {{ $row->category_name }}  </option>
                @endforeach
              
         
            </select>


        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">SubCategory Name</label>
            <input type="text" class="form-control @error('category_name') Is Invalid @enderror"  name="category_name" aria-describedby="emailHelp" 
            placeholder="Category Name" value= "{{ old('category_name')}}" >
            @error('category_name')
            <span class ="Invalid-feedback" role="alart">
                <strong> {{ $message }} </strong>
            @enderror
            <br><br>
           
        </div>

  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                     

                   
                  

                    
                
            </div>
        </div>
    </div>
</x-app-layout>
