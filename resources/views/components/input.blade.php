<div class=" xl:w-[60%] md:flex-row md:gap-4 w-[85%] md:w-[70%] md:items-center flex flex-col">


    <label for="" class="text-sm w-32 flex md:justify-end">
        {{$required ?? ''}}{{$label}}
    </label>


    <input
     class="border-gray-400 border p-1 w-full focus:outline-none"
     type={{$type}}
     placeholder={{$place}}
     value="{{$value}}"
     name="{{$name}}"
     >


</div>
