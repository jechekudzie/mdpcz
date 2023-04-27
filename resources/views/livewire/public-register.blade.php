<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" type="text"
                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                   placeholder="Search practitioners by name, reg number, or profession ...">
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderBy"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option value="id">Sort By</option>
                <option value="specialty">Specialty</option>
                <option value="primary_qualifications">Qualification</option>
                <option value="registration_number">Registration number</option>
            </select>

            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>

        <div class="w-1/6 relative mx-1">
             <select wire:model="specialty"
                     class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                     id="grid-state">
                 <option value="">Choose By Registers</option>
                 @foreach($specialities as $speciality)
                     <option value="{{$speciality->sp_name}}">{{$speciality->sp_name}}</option>
                 @endforeach
             </select>

             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                     <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                 </svg>
             </div>
         </div>


        <div class="w-1/6 relative mx-1">
            <select wire:model="orderAsc"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="perPage"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
    </div>
    <table class="display table table-hover table-striped table-bordered table-auto w-full mb-6">
        <thead>
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Gender</th>
            <th class="px-4 py-2">Registration Number</th>
            <th class="px-4 py-2">Qualification</th>
            <th class="px-4 py-2">Specialty</th>
            <th class="px-4 py-2">Business Address</th>
            <th class="px-4 py-2">Business Contact</th>
            {{--<th class="px-4 py-2">Profile</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($practitioners as $practitioner)
            <tr>
                <td class="border px-4 py-2">{{$practitioner->Fullname}}</td>
                <td class="border px-4 py-2">{{$practitioner->Gender}}</td>
                <td class="border px-4 py-2">{{$practitioner->registration_number}}</td>
                <td class="border px-4 py-2">{{$practitioner->primary_qualifications}}</td>
                <td class="border px-4 py-2">{{$practitioner->specialty}}</td>
                <td class="border px-4 py-2">{{$practitioner->business_address}}</td>
                <td class="border px-4 py-2">{{$practitioner->business_telephone}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

    @if ($practitioners->count())
        {{ $practitioners->links('pagination::bootstrap-4') }}
    @endif


    <div>
        @if ($practitioners->count())
        Showing {!! $practitioners->firstItem() !!} of {!! $practitioners->lastItem() !!} out
        of {!! $practitioners->total() !!}
        @endif
    </div>
</div>
