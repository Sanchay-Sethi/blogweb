<head>
    <style>
        .min-h-screen {
            background : url("assets/bg4.jpg");
            background-size : cover;
            background-position: center;
          }
    </style>
  </head>
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class = "py-2">
        <div class="bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 my-5" style = "box-shadow: rgb(85, 91, 255) 0px 0px 0px 3px, rgb(31, 193, 27) 0px 0px 0px 6px, rgb(255, 217, 19) 0px 0px 0px 9px, rgb(255, 156, 85) 0px 0px 0px 12px, rgb(255, 85, 85) 0px 0px 0px 15px;">
                <form method="POST" class="bg-white w-full max-w-sm shadow-md rounded pr-6 pl-8 pt-6 pb-8">
                    @csrf
                    
                    <div class="px-6 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                            Add Title
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Your view title" name = "title" required>
                    </div>
                    <div class="px-6 mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                            Add Body
                        </label>
                        <textarea rows="10" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="body" type="text" placeholder="Add something that everyone can relate...." name = "body" required></textarea>
                    </div>
                    <div class=" px-6 py-4 flex items-center justify-between">
                        <input style = "background-color : rgb(15, 75, 255); cursor : pointer;" class="shadow focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name = "submit" value = "✎ Add New" />
                    </div>
                    @if(session()->has('status'))
                          <p class="w-full text-center font-semibold mr-2 my-5 flex-auto text-black">{{session('status')}}</p>
                    @endif
                </form>
        </div>
    </div>
    
</x-app-layout>
