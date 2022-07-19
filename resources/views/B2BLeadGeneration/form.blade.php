<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="post" action="{{ route('contact.store') }}">
            @csrf
            {{-- user details --}}
        <div class="">

        <div class="">
        <table>
        <tr>
            <h3>User Section</h3><br>
        </tr>
        <tr>
            <td>Owner</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Owner') ? 'error' : '' }}" name="Owner" id="Owner">
                <!-- Error -->
                @if ($errors->has('Owner'))
                <td class="error">
                    {{ $errors->first('Owner') }}
                </td>
                @endif
            </td>
            <td>Source</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Source') ? 'error' : '' }}" name="Source" id="Source">
                <!-- Error -->
                @if ($errors->has('Source'))
                <td class="error">
                    {{ $errors->first('Source') }}
                </td>
                @endif
            </td>
            <td>First Name</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('First_Name') ? 'error' : '' }}" name="First_Name" id="First_Name">
                <!-- Error -->
                @if ($errors->has('First_Name'))
                <td class="error">
                    {{ $errors->first('First_Name') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Last_Name') ? 'error' : '' }}" name="Last_Name" id="Last_Name">
                <!-- Error -->
                @if ($errors->has('Last_Name'))
                <td class="error">
                    {{ $errors->first('Last_Name') }}
                </td>
                @endif
            </td>
            <td>Email</td>
            <td class="form-group">
                <input type="email" class="form- {{ $errors->has('Email') ? 'error' : '' }}" name="Email" id="Email">
                @if ($errors->has('Email'))
                <td class="error">
                    {{ $errors->first('Email') }}
                </td>
                @endif
            </td>
            <td>Title</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Title') ? 'error' : '' }}" name="Title" id="Title">
                @if ($errors->has('Title'))
                <td class="error">
                    {{ $errors->first('Title') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Phone') ? 'error' : '' }}" name="Phone" id="Phone">
                @if ($errors->has('Phone'))
                <td class="error">
                    {{ $errors->first('Phone') }}
                </td>
                @endif
            </td>
            <td>Mobile</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Mobile') ? 'error' : '' }}" name="Mobile" id="Mobile">
                @if ($errors->has('Mobile'))
                <td class="error">
                    {{ $errors->first('Mobile') }}
                </td>
                @endif
            </td>
            <td>Address</td>
            <td class="form-group">
                <textarea class="form- {{ $errors->has('Address') ? 'error' : '' }}" name="Address" id="Address"
                    rows="4"></textarea>
                @if ($errors->has('Address'))
                <td class="error">
                    {{ $errors->first('Address') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('City') ? 'error' : '' }}" name="City"
                    id="City">
                @if ($errors->has('City'))
                <td class="error">
                    {{ $errors->first('City') }}
                </td>
                @endif
            </td>
            <td>State</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('State') ? 'error' : '' }}" name="State"
                    id="State">
                @if ($errors->has('State'))
                <td class="error">
                    {{ $errors->first('State') }}
                </td>
                @endif
            </td>
            <td>Country</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Country') ? 'error' : '' }}" name="Country"
                    id="Country">
                @if ($errors->has('Country'))
                <td class="error">
                    {{ $errors->first('Country') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>Zip_Code</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Zip_Code') ? 'error' : '' }}" name="Zip_Code"
                    id="Zip_Code">
                @if ($errors->has('Zip_Code'))
                <td class="error">
                    {{ $errors->first('Zip_Code') }}
                </td>
                @endif
            </td>
            <td>Facebook</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Facebook') ? 'error' : '' }}" name="Facebook"
                    id="Facebook">
                @if ($errors->has('Facebook'))
                <td class="error">
                    {{ $errors->first('Facebook') }}
                </td>
                @endif
            </td>
            <td>Twitter</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Twitter') ? 'error' : '' }}" name="Twitter"
                    id="Twitter">
                @if ($errors->has('Twitter'))
                <td class="error">
                    {{ $errors->first('Twitter') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>Linkedin</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Linkedin') ? 'error' : '' }}" name="Linkedin"
                    id="Linkedin">
                @if ($errors->has('Linkedin'))
                <td class="error">
                    {{ $errors->first('Linkedin') }}
                </td>
                @endif
            </td>
        </tr>
    </table>
</div>
        {{-- end user details --}}
        <div class=""><hr></div>
        {{-- company details --}}
        <div class="">
        <table>
        <tr>
            <h3>Company Section</h3><br>
        </tr>
        <tr>
            <td>Company Name</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Name') ? 'error' : '' }}" name="Company_Name" id="Company_Name">
                <!-- Error -->
                @if ($errors->has('Company_Name'))
                <td class="error">
                    {{ $errors->first('Company_Name') }}
                </td>
                @endif
            </td>
            <td>Company Email</td>
            <td class="form-group">
                <input type="email" class="form- {{ $errors->has('Company_Email') ? 'error' : '' }}" name="Company_Email" id="Company_Email">
                @if ($errors->has('Company_Email'))
                <td class="error">
                    {{ $errors->first('Company_Email') }}
                </td>
                @endif
            </td>
            <td>Company Phone</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Phone') ? 'error' : '' }}" name="Company_Phone" id="Company_Phone">
                @if ($errors->has('Company_Phone'))
                <td class="error">
                    {{ $errors->first('Company_Phone') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>Company Mobile</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Mobile') ? 'error' : '' }}" name="Company_Mobile" id="Company_Mobile">
                @if ($errors->has('Company_Mobile'))
                <td class="error">
                    {{ $errors->first('Company_Mobile') }}
                </td>
                @endif
            </td>
            <td>Company Address</td>
            <td class="form-group">
                <textarea class="form- {{ $errors->has('Company_Address') ? 'error' : '' }}" name="Company_Address" id="Company_Address"
                    rows="4"></textarea>
                @if ($errors->has('Company_Address'))
                <td class="error">
                    {{ $errors->first('Company_Address') }}
                </td>
                @endif
            </td>
            <td>Company City</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_City') ? 'error' : '' }}" name="Company_City"
                    id="Company_City">
                @if ($errors->has('Company_City'))
                <td class="error">
                    {{ $errors->first('Company_City') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>Company State</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_State') ? 'error' : '' }}" name="Company_State"
                    id="Company_State">
                @if ($errors->has('Company_State'))
                <td class="error">
                    {{ $errors->first('Company_State') }}
                </td>
                @endif
            </td>
            <td>Company_Country</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Country') ? 'error' : '' }}" name="Company_Country"
                    id="Company_Country">
                @if ($errors->has('Company_Country'))
                <td class="error">
                    {{ $errors->first('Company_Country') }}
                </td>
                @endif
            </td>
            <td>Company ZipCode</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_ZipCode') ? 'error' : '' }}" name="Company_ZipCode"
                    id="Company_ZipCode">
                @if ($errors->has('Company_ZipCode'))
                <td class="error">
                    {{ $errors->first('Company_ZipCode') }}
                </td>
                @endif
            </td>
            </tr>
        <tr>
            <td>Company Website</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Website') ? 'error' : '' }}" name="Company_Website"
                    id="Company_Website">
                @if ($errors->has('Company_Website'))
                <td class="error">
                    {{ $errors->first('Company_Website') }}
                </td>
                @endif
            </td>
            <td>Company Facebook</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Facebook') ? 'error' : '' }}" name="Company_Facebook"
                    id="Company_Facebook">
                @if ($errors->has('Company_Facebook'))
                <td class="error">
                    {{ $errors->first('Company_Facebook') }}
                </td>
                @endif
            </td>
            <td>Company Twitter</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Twitter') ? 'error' : '' }}" name="Company_Twitter"
                    id="Company_Twitter">
                @if ($errors->has('Company_Twitter'))
                <td class="error">
                    {{ $errors->first('Company_Twitter') }}
                </td>
                @endif
            </td>
        </tr>
        <tr>
            <td>Company Linkedin</td>
            <td class="form-group">
                <input type="text" class="form- {{ $errors->has('Company_Linkedin') ? 'error' : '' }}" name="Company_Linkedin"
                    id="Company_Linkedin">
                @if ($errors->has('Company_Linkedin'))
                <td class="error">
                    {{ $errors->first('Company_Linkedin') }}
                </td>
                @endif
            </td>
        </td>
    </tr>
    <tr>
    </table>
        </div>
            <input type="submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>
</html>