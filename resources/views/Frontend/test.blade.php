@extends('Frontend.master')
@section('title')
    Exam Page
@endsection
@section('content')
<div class="main" style="min-height:550px">
        <h1 style="text-align:center">Welcome to Online Exam</h1>
            <div class="card col-md-6" style="margin:0 auto;margin-top:150px">
                <form method="post" action="">
                <table>
                    <tr>
                        <td colspan="2">
                         <h3>Que 1: What is the first event that will be triggered in the from?</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                         <input type="radio" name="ans1"/>Load
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="radio" name="ans2"/>GotFocus
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="ans3"/>Instance
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="ans4"/>Initialize
                        </td>
                    </tr>

                    <tr>
                      <td>
                        <input type="submit" name="submit" value="Next Question"/>
                        <input type="hidden" name="number"/>
                    </td>
                    </tr>

                </table>
        </div>
         </div>

@endsection
