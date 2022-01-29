<!-- ====================Slider 2=================== -->
<table width="100%" height="auto" class="swiper-slide">
    <tr>
    
      <td colspan="4" style="padding-left:20px;" align="center">
        <h2 style="font-family:ebrima; color:#3c4039;">
          DEPENDENT(s) or BENEFICIARY(ies)
        </h2>
      </td>
    </tr>
    <tr>
      <td colspan="4" align="center">
        <h4>SPOUSE DATA</h4>
      </td>
    </tr>
    
    @if ($cspouse >= 1)
    @foreach ($spouse as $res)
      <tr>
        <td align="right" width="250px">
          <b>Spouse Name:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
          {{ ucwords($res->fname." ".$res->mname." ".$res->lname) }}
        </td>
      </tr>
      <tr>
        <td align="right" width="250px">
          <b>Birthdate:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
          {{ date('F d, Y', strtotime($res->bdate)) }}
        </td>
      </tr>
      @endforeach
    @else
      <tr>
        <td align="right" width="250px">
          <b>Spouse Name:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
            <span class='nd_span'>No Data</span>
        </td>
      </tr>
      <tr>
        <td align="right" width="250px">
          <b>Birthdate:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
            <span class='nd_span'>No Data</span>
        </td>
      </tr>
    @endif
    

    <tr>
      <td colspan="4" align="center">
        <h4>CHILDREN's DATA</h4>
      </td>
    </tr>
    @php
        $a = 1;
    @endphp
    
        @if ($cchild >= 1)
        @foreach ($child as $res)
          <tr>
            <td align="right" width="250px">
              <b>Child Name {{ $a }}:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              {{ ucwords($res->fname." ".$res->mname." ".$res->lname) }}
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Birthdate:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              {{ date('F d, Y', strtotime($res->bdate)) }}
            </td>
          </tr>
          @php
            $a++;
          @endphp
          @endforeach
        @else
        <tr>
          <td align="right" width="250px">
            <b>Child Name:</b>
          </td>
          <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
          </td>
        </tr>
        <tr>
          <td align="right" width="250px">
            <b>Birthdate:</b>
          </td>
          <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
          </td>
        </tr>
        
        @endif
    

   
    
    <tr>
      <td colspan="4" align="center">
        <h4>OTHER's DATA</h4>
      </td>
    </tr>
    </tr>
    @php
        $b = 1;
    @endphp
    
        @if ($cother >= 1)
        @foreach ($other as $res)
          <tr>
            <td align="right" width="250px">
              <b>Other Name {{ $b }}:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              {{ ucwords($res->fname." ".$res->mname." ".$res->lname) }}
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Birthdate:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              {{ date('F d, Y', strtotime($res->bdate)) }}
            </td>
          </tr>
        @php
          $b++;
        @endphp
        @endforeach
        @else
          <tr>
            <td align="right" width="250px">
              <b>Other Name:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
                <span class='nd_span'>No Data</span>
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Birthdate:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
                <span class='nd_span'>No Data</span>
            </td>
          </tr>
        @endif
    

    
    <tr>
      <td colspan="4"></td>
    </tr>
    <tr>
      <td colspan="4"></td>
    </tr>
    @if ($cspouse >= 1 || $cchild >= 1 || $cother >= 1)
    <tr>
      <td colspan="4" align="center">
        <a class="btn btn-primary" href="edit-beneficiaries" onclick="document.location='sssform/sss-form.php'" style="width: 239px;margin-bottom: 29px;">
          EDIT
        </a>
      </td>
    </tr>
    @endif
    </table>
      <!-- =============================slider 2 end========================== -->
    