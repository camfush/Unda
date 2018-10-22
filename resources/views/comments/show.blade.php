<tr class="row">
  <td class="col-lg-4 reduce-size">{{$element->user->name}} {{\Carbon\Carbon::createFromTimeStamp(strtotime($element->created_at))->diffForHumans()}}:</td>
  <td class="col-lg-8 reduce-size-slightly">{{$element->content}}</td>
</tr>
