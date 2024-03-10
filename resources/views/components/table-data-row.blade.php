
@props(['task'])

    <tr>
        <td class="pl-6 py-4 max-w-[18rem] overflow-hidden whitespace-nowrap text-base text-gray-600">{{$task->name}}</td>
        <td class="pl-6 py-4 max-w-[21rem] overflow-hidden whitespace-nowrap text-base text-gray-600">{{$task->description}}</td>
        <td class="pl-6 py-4 max-w-[8rem]  overflow-hidden whitespace-nowrap text-base text-gray-600">{{$task->created_at->format('d/m/Y')}}</td>
        <td class="pl-6 py-4 max-w-[8rem]  overflow-hidden whitespace-nowrap text-base
        {{\Illuminate\Support\Carbon::parse($task->due_date)->isBefore(\Illuminate\Support\Carbon::now()) ? 'text-red-600' : 'text-gray-600'}}">
            {{\Illuminate\Support\Carbon::parse($task->due_date)->format('d/m/Y')}}
        </td>
        <td class="pl-6 py-4 max-w-[15rem] overflow-hidden whitespace-nowrap text-base text-gray-600">
            <ul class="flex gap-2">
                <form action="/destroy" method="post" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{$task->id}}">
                    <button type="submit">
                        <li class="text-base text-gray-900 underline">{{__('dashboard.delete')}}</li>
                    </button>
                </form>
                
                <li><a class="text-base text-gray-900 underline" href="/edit/{{$task->id}}">{{__('dashboard.edit')}}</a></li>
                <li><a class="text-base text-gray-900 underline" href="/tasks/{{$task->id}}">{{__('dashboard.show')}}</a></li>
            </ul>
        </td>
    </tr>
