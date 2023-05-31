<div class="bg-black m-lg-5">
    @if($errors->any())
        <div class="bg-red-200 p-3">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container p-2 m-1">
        <table class="table table-borderless text-white">
            <form method="post" action="{{route('companyCreate')}}">
                @csrf
                <tbody>
                <tr>
                    <th scope="col">Company name</th>
                    <td>
                        <input type="text" maxlength="35" value="{{old('companyName')}}" class="form-control" size="30"
                               name="companyName">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Tax number</th>
                    <td>
                        <input type="text" maxlength="25" value="{{old('taxNumber')}}" class="form-control" size="30"
                               name="taxNumber">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Phone number</th>
                    <td>
                        <input type="tel" maxlength="30" value="{{old('phoneNumber')}}" class="form-control" size="30"
                               name="phoneNumber">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Email</th>
                    <td>
                        <input type="email" maxlength="35" value="{{old('emailAddress')}}" class="form-control"
                               size="30"
                               name="emailAddress">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="btn-success" type="submit" value="Create">
                    </td>
            </form>
            </tr>
            </tbody>
        </table>
    </div>
</div>
