
<head>
  <style>
      .min-h-screen {
          background : url("assets/bg2.jpg");
          background-size : cover;
          background-position: center;
        }
  </style>
</head>
<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-6">
      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5" style = "margin : 20px 0px">
            
            <div class="sm:rounded-full" style = "border-radius: 15px;  box-shadow: blue 0px 0px 0px 2px inset, rgb(255, 255, 255) 10px -10px 0px -3px, rgb(31, 193, 27) 10px -10px, rgb(255, 255, 255) 20px -20px 0px -3px, rgb(255, 217, 19) 20px -20px, rgb(255, 255, 255) 30px -30px 0px -3px, rgb(255, 156, 85) 30px -30px, rgb(255, 255, 255) 40px -40px 0px -3px, rgb(255, 85, 85) 40px -40px;">
                <div class="p-5 bg-white border-b border-gray-200" style = " border-radius: 10px; display:flex; flex-direction:column; justify-content : center; align-items : center;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;">
                  <div class = "w-1/2 my-6 container mx-auto">
                    {{$posts->links()}}
                  </div>
                  <h1 class = "w-full text-center text-black">All Blogs</h1>
                  <center>
                    @foreach($posts as $post)
                    <div  class="bg-white max-w-sm rounded overflow-hidden my-5" style = "position:relative; margin:15px 10px; width : 80%; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px ,rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">{{$post->title}}</div>
                          <div class="text-gray-600 text-sm" style = "width : 100%">
                            {{
                                $post->body
                            }}
                          </div>
                        <div style = "position : absolute; background-color : white; padding : 5px 10px; border-bottom-right-radius : 10px; "><p class = "text-sm">By <span style ="color : rgb(199, 50, 90)">{{$post->user->name}}</span></p></div>
                        </div>
                        <div class="px-6 py-6 ">
                        </div>
                      </div>
                    @endforeach
                  </center>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
