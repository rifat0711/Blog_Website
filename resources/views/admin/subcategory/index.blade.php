<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All SubCategory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
             <a href= "{{ route('subcategory.create') }}" class ="btn btn-sm btn-primary" style="float:right;"> Add SubCategory </a>

                     

                    <table class="table table-responsive ">
                      <thead>
                        <tr>
                            <th>SL</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($subcategory as $key=>$row)
                            <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $row->subcategory_id }}</td>
                            <td>{{ $row->subcategory_name }}</td>
                            <td>{{ $row->subcategory_slug}}</td>
                            <!-- <td>
                                <a href= "{{ route('category.edit', $row->id) }}" class ="btn btn-sm btn-info">edit </a>
                                <a href= "{{ route('category.delete', $row->id) }}" class ="btn btn-sm btn-info">delete </a>  
                            </td> -->

                            </tr>
                            @endforeach
                        </tbody> 
                        
                   </table>
                  

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
