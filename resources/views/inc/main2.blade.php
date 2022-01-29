<!-- ====================Slider 2=================== -->
<table width="100%" height="auto" class="swiper-slide">
    <tr>
    
      <td colspan="4" style="padding-left:20px;" align="center">
        <h2 style="font-family:ebrima; color:#3c4039;">
          PROFESSION OR SELF EMPLOYMENT DATA
        </h2>
      </td>
    </tr>
    <tr>
      <td colspan="4" align="center">
        <h4>SELF-EMPLOYED (SE)</h4>
      </td>
    </tr>
   
       @if ($coption >= 1)
       @foreach ($option as $res)
       <tr>
        <td align="right" width="250px">
          <b>Profession/Business:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
          {{ ucwords($res->PROFESSION) }}
        </td>
      </tr>
      <tr>
        <td align="right" width="250px">
          <b>Year started:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
          {{ date('F d, Y', strtotime($res->YEARBUSINESS)) }}
        </td>
      </tr>
      <tr>
        <td align="right" width="250px">
          <b>Monthly Earnings:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
              &#8369; {{ number_format($res->MONTHLYEARN); }}
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center">
          <h4>OVERSEAS FILIPINO WORKER (OFW)</h4>
        </td>
      </tr>
      <tr>
        <td align="right" width="250px">
          <b>Foreign Address:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
          {{ ucwords($res->FOREIGNADD) }}
        </td>
      </tr>
      <tr>
        <td align="right" width="250px">
          <b>Monthly Earnings:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
              &#8369; {{ number_format($res->MONTHLYFEARN); }}
        </td>
      </tr>
      <tr>
        <td align="right" width="250px">
          <b>Member of Flex-fund program:</b>
        </td>
        <td colspan="3" style="padding-left:40px;">
          {{ strtoupper($res->FLEX); }}
        </td>
      </tr>
      <tr>
        <td colspan="4"></td>
      </tr>
      <tr>
        <td colspan="4"></td>
      </tr>
      <tr>
        <td colspan="4" align="center">
          <a class="btn btn-primary" href="edit-proffession" onclick="document.location='sssform/sss-form.php'" style="width: 239px;margin-bottom: 29px;">
            EDIT
          </a>
        </td>
      </tr>
      @endforeach
       @else
          <tr>
            <td align="right" width="250px">
              <b>Profession/Business:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Year started:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Monthly Earnings:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
            </td>
          </tr>
          <tr>
            <td colspan="4" align="center">
              <h4>OVERSEAS FILIPINO WORKER (OFW)</h4>
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Foreign Address:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Monthly Earnings:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
            </td>
          </tr>
          <tr>
            <td align="right" width="250px">
              <b>Member of Flex-fund program:</b>
            </td>
            <td colspan="3" style="padding-left:40px;">
              <span class='nd_span'>No Data</span>
            </td>
          </tr>
       @endif
   
    </table>
      <!-- =============================slider 2 end========================== -->
    