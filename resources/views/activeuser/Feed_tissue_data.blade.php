@extends('layouts.activeuserheader')

@section('content')
<div class="container">
    <div class="raw">
    <div class="column">
   <img src ="{{ asset('img/image.png') }}" align="left" height="600" width="700">
    </div>
    </div>
 <div class="raw">
        <div class="column">
        <br>
        <br>
        <br>
        <br>
        <div class="container col-md-8" id="mainform">
                <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <form class="form-horizontal" role="form" method="post" action="/save_tissue_data" onSubmit="return checkblank(this);">
                            {{csrf_field()}}
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>

                                @endforeach
                                @if(session()->has('notif'))
                                    <div class="row">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Notification</strong>{{session()->get('notif')}}
                                        </div>
                                    </div>
                                @endif
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <input type="hidden" class="form-control" name="user_id" value={{ Auth::user()->id }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="btn-toolbar">
                                            <span style="padding-right:800px;"></span>
                                            <label for="age_group"><b>Age Group</b></label>
                                            <span style="padding-right:30px;"></span>
                                            <select  name="age_group" >
                                              <option value="20-30">20-30</option>
                                              <option value="30-40">30-40</option>
                                              <option value="40-50">40-50</option>
                                            </select>
                                            <span style="padding-right:30px;"></span>
                                            <label for="gender"><b>Gender</b></label>
                                            <span style="padding-right:30px;"></span>
                                            <select  name="gender" >
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select>

                                    </div>
                                    </div>
                                    <table class="steelBlueCols">
                                            <thead>
                                            <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Value(mm)</th>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Value(mm)</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                            <td colspan="6">&nbsp;</td>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                            <td>1</td>
                                            <td>Bregma</td>
                                            <td><input class="form-control" name="bregma" type="text" /></td>
                                            <td>12</td>
                                            <td>Infra orbital</td>
                                            <td><input class="form-control" name="infra_orbital" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>2</td>
                                            <td>Glabella</td>
                                            <td><input class="form-control" name="glabella" type="text" /></td>
                                            <td>13</td>
                                            <td>Ectoconchion</td>
                                            <td><input class="form-control" name="ectoconchion" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>3</td>
                                            <td>Nasion</td>
                                            <td><input class="form-control" name="nasion" type="text" /></td>
                                            <td>15</td>
                                            <td>supra canine</td>
                                            <td><input class="form-control" name="supra_canine" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>4</td>
                                            <td>End of nasal bone</td>
                                            <td><input class="form-control" name="end_of_nasal_bone" type="text" /></td>
                                            <td>16</td>
                                            <td>Infra canine</td>
                                            <td><input class="form-control" name="infra_canin" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>5</td>
                                            <td>Mid philtrum</td>
                                            <td><input class="form-control" name="mid_philtrum" type="text" /></td>
                                            <td>cell4_5</td>
                                            <td>cell5_5</td>
                                            <td>cell6_5</td>
                                            </tr>
                                            <tr>
                                            <td>6</td>
                                            <td>Upper lip margin</td>
                                            <td><input class="form-control" name="upper_lip_margin" type="text" /></td>
                                            <td>17</td>
                                            <td>Jugale</td>
                                            <td><input class="form-control" name="jugale" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>7</td>
                                            <td>Lower lip margin</td>
                                            <td><input class="form-control" name="lower_lip_margin" type="text" /></td>
                                            <td>18</td>
                                            <td>Zygomatic arch</td>
                                            <td><input class="form-control" name="zygomatic_arch" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>8</td>
                                            <td>Chin lip fold</td>
                                            <td><input class="form-control" name="chin_lip_fold" type="text" /></td>
                                            <td>19</td>
                                            <td>Supra glenoid</td>
                                            <td><input class="form-control" name="supra_glenoid" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>9</td>
                                            <td>Mental eminence</td>
                                            <td><input class="form-control" name="mental_emnince" type="text" /></td>
                                            <td>20</td>
                                            <td>Mastoidale</td>
                                            <td><input class="form-control" name="mastoiale" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>10</td>
                                            <td>Beneath chin</td>
                                            <td><input class="form-control" name="beneath_chin" type="text" /></td>
                                            <td>21</td>
                                            <td>Euryon</td>
                                            <td><input class="form-control" name="euryon" type="text" /></td>
                                            </tr>
                                            <tr>
                                            <td>11</td>
                                            <td>Supra orbital</td>
                                            <td><input class="form-control" name="supra_orbital" type="text" /></td>
                                            <td>22</td>
                                            <td>Gonion</td>
                                            <td><input class="form-control" name="gonion" type="text" /></td>
                                            </tr>
                                            </tbody>
                                            </table>
                                    <div class="form-group">
                                        <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                            <button id="btn-signup" type="submit" class="btn btn-info">Add</button>

                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </div>
</div>
</div>


@endsection
