<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Styles -->
        <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: auto;
                }

                td, th {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
                }

                tr:nth-child(even) {
                  background-color: #dddddd;
                }
        </style>
    </head>
    <body>
        <table>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Distance</th>
          </tr>
          @foreach($newAffilates as $newAffilate)
            @if($newAffilate->distance < 100)    
              <tr>
                <td>{{$newAffilate->affiliate_id}}</td>
                <td>{{$newAffilate->name}}</td>
                <td>{{$newAffilate->distance}}</td>
               </tr>
            @endif  
          @endforeach
        </table>
    </body>
</html>
