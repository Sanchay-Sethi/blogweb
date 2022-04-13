
<head>
    <style>
        .min-h-screen {
            background : url("assets/bg.png");
            background-size : cover;
            background-position: center;
          }
    </style>
  </head>

<x-app-layout  >
    <x-slot name="header">
    </x-slot>

    

    <div class="py-12" style= "position : relative; " >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="sm:rounded-full" style = "border-radius: 15px;  ">
                <div class="bg-white border-b border-gray-200" style = " border-radius: 10px; display:flex; flex-direction:column; justify-content : center; align-items : center;box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                    <center>
                    @if($posts->count()!=0)
                        @foreach($posts as $post)
                            <div class="bg-white max-w-sm rounded overflow-hidden my-5 p-5" style = "display : flex; justify-content : space-evenly; align-items : center; position:relative; margin:15px 10px; width : 80%; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
                                <p>{{$loop->index+1}}.</p>
                                <div class="px-6 py-2">
                                    <div class="font-bold text-xl mb-2">{{$post->title}}</div>
                                    <div class="text-gray-600 text-sm" style = "width : 100%">
                                      {{$post->body}}
                                    </div>
                                  </div>
 
                                <div class="px-6 py-6 ">
                                    @if(Auth::user()->id===$post->user->id)
                                        <a href="{{url('/blog/edit', $post->id)}}" class = "bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-black text-sm py-1 px-2 rounded">EDIT</a>
                                        <a href="{{url('/blog/delete', $post->id)}}"   class = "bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-red-600 text-sm py-1 px-2 rounded">DELETE</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @if($posts->count()==0)
                        <div style = "display:flex; flex-direction:column; justify-content:center; align-items:center; padding: 20px;">
                            <h1 style = "font-size: 30px; font-weight: bold;">No Blog Found!</h1>
                            <a href="/blog" class = "focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded" style = "background-color :rgb(72, 153, 230)">Create Your First Blog</a>
                        </div>
                    @endif
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

