@foreach ($pdata as $res)
<!-- =====================slider 1=============================== -->
<table width="100%" height="auto" class="swiper-slide">
    <tr>
      <td colspan="4" style="padding-left:20px;" align="center">
        <h2 style="font-family:ebrima; color:#3c4039;">
          PERSONAL DATA
        </h2>
      </td>
    </tr>
  <tr>
    <td rowspan="3" width="20%" align="center" style="background: rgb(134,170,249);">
      <i class="ion-person" style="padding: 0;margin: 0;font-size: 100px;color: #fff;"></i>
    </td>
    <td colspan="4" style="padding-left:20px;">
      <h2 style="font-family:ebrima; color:#3c4039;">
        {{ $row->username }}
      </h2>
    </td>
  </tr>
  <tr>
    <td colspan="4"></td>
  </tr>
  @if ($res->USERID >= 1)
      <tr>
        <td width="110px" align="right"><b>Name:</b></td>
        <td colspan="3" style="padding-left:5px;">
            {{ $res->FIRSTNAME." ".$res->MIDNAME." ".$res->LASTNAME }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td align="right"><b>TIN ID No:</b></td>
        <td style="padding-left:5px;">
            {{ $res->TAXIDENTITY }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td align="right"><b>Date of Birth:</b></td>
        <td style="padding-left:5px;">
            {{ date('F d, Y', strtotime($res->BIRTHDATE)) }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td width="80px" align="right"><b>Gender:</b></td>
        <td style="padding-left:5px;">
          {{ $res->GENDER }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td width="80px" align="right"><b>Civil Status:</b></td>
        <td style="padding-left:5px;">
          {{ $res->CIVILSTATUS }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td width="80px" align="right"><b>Nationality:</b></td>
        <td style="padding-left:5px;">
          {{ $res->NATIONALITY }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td width="80px" align="right"><b>Religion:</b></td>
        <td style="padding-left:5px;">
          {{ $res->RELIGION }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td align="right"><b>Address:</b></td>
        <td colspan="3" style="padding-left:5px;">
        {{ $res->CITY.", ". $res->PROVINCE}}
        </td>
      </tr>
      <tr>
        <td></td>
        <td align="right"><b>Email:</b></td>
        <td colspan="3" style="padding-left:5px;">
          {{ $res->EMAIL }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td width="80px" align="right"><b>Contact No:</b></td>
        <td style="padding-left:5px;">
          {{ $res->MOBILENO }}
        </td>
      </tr>
      <tr>
        <td></td>
        <td width="80px" align="right"><b>Tel. No:</b></td>
        <td style="padding-left:5px;">
          {{ $res->TELNO }}
        </td>
      </tr>
      <tr>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="5" align="center">
          <a class="btn btn-primary" href="SSSFORM/pd.edit.php" onclick="document.location='sssform/sss-form.php'" style="width: 239px;margin-bottom: 29px;">
            EDIT
          </a>
        </td>
      </tr>
  @else
    <tr>
      <td width="110px" align="right"><b>Name:</b></td>
      <td colspan="3" style="padding-left:5px;">
          <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td align="right"><b>TIN ID No:</b></td>
      <td style="padding-left:5px;">
          <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td align="right"><b>Date of Birth:</b></td>
      <td style="padding-left:5px;">
          <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td width="80px" align="right"><b>Gender:</b></td>
      <td style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td width="80px" align="right"><b>Civil Status:</b></td>
      <td style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td width="80px" align="right"><b>Nationality:</b></td>
      <td style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td width="80px" align="right"><b>Religion:</b></td>
      <td style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td align="right"><b>Address:</b></td>
      <td colspan="3" style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td align="right"><b>Email:</b></td>
      <td colspan="3" style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
  
    </tr>
    <tr>
      <td></td>
      <td width="80px" align="right"><b>Contact No:</b></td>
      <td style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td width="80px" align="right"><b>Tel. No:</b></td>
      <td style="padding-left:5px;">
        <span class='nd_span'>No Data</span>
      </td>
    </tr>
    @endif
  </table>
  @endforeach
  