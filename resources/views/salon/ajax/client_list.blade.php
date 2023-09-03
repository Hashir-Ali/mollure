@if(count($clients)>0)
      @foreach($clients as $client)
      @if(isset($prof_client[$client->id]) && $prof_client[$client->id]=='block')
        <tr class="client_tr client_tr_{{$client->id}}" data-name="{{$client->prof_address[0]->contact_person_first_name}} {{$client->prof_address[0]->contact_person_last_name}} {{$client->email}} {{$client->prof_address[0]->contact_number}}" style="background:#ddd;">
      @else
        <tr class="client_tr client_tr_{{$client->id}}" data-name="{{$client->prof_address[0]->contact_person_first_name}} {{$client->prof_address[0]->contact_person_last_name}} {{$client->email}} {{$client->prof_address[0]->contact_number}}"> 
      @endif   
        <td class="bdr_top bdr_top_border" data-user="{{$client->id}}" style="padding:16px 20px;">
            <span class="d-block pb-1">{{$client->prof_address[0]->contact_person_first_name}} {{$client->prof_address[0]->contact_person_last_name}}</span>
            <span class="d-block pb-1">
            @if($client->user_type == 'individual')
              Indiv, Cl
            @else
              Company Cl
            @endif
            </span>
            <span class="d-block pb-1">{{$client->gender}}</span>
            <span class="d-block pb-1">{{$client->email}}</span>
            <span class="d-block pb-1">{{$client->prof_address[0]->contact_number}}</span>
            <!-- <span class="d-block pb-1" onclick="show_note_inp()">Technical note</span> -->
            <div style="position:relative">


              @if($client->client_notes && count($client->client_notes)>0)
                <span class="note-font-size">Technical note</span>
              <input type="hidden" id="tech_note_inp_{{$client->id}}" data-tech-i="{{$client->client_notes[0]->tech_note_id}}" value="{{$client->client_notes[0]->note}}">
              <div class="tooltip">
                  <span class="tooltip-text">{{$client->client_notes[0]->note}}</span>
              </div>
              <div class="action_area" data-user="{{$client->id}}">
                  <span title="Edit" class="tech_note_edit">
                      <img src="{{URL::asset('public/icons/Edit_Pencil_Line_01.png')}}" alt="edit icon" />
                  </span>
                  <span title="Delete" class="tech_note_delete tech_note_delete_{{$client->id}}">
                      <img src="{{URL::asset('public/icons/Trash_Empty.png')}}" alt="delete icon" />
                  </span>
              </div>
              @else
              <input type="hidden" id="tech_note_inp_{{$client->id}}" data-tech-i="" value="">
              <div id="tooltip" class="tooltip">
                  <span class="tooltip-text">No technical note</span>
              </div>
              <div class="action_area" data-user="{{$client->id}}" style="display: none;">
                  <span title="Edit" class="tech_note_edit">
                      <img src="{{URL::asset('public/icons/Edit_Pencil_Line_01.png')}}" alt="edit icon" />
                  </span>
                  <span title="Delete" class="tech_note_delete tech_note_delete_{{$client->id}}" style="display:none;">
                      <img src="{{URL::asset('public/icons/Trash_Empty.png')}}" alt="delete icon" />
                  </span>
              </div>
              @endif
            </div>
            
          </td>
          <!-- <td class="text-center bdr_top bdr_left">
            </td> -->
          <!-- <td class="text-center bdr_top bdr_left"></td> -->
          <td class="text-center bdr_top bdr_left">@if($client->client_total_sale[0]->total_sale >0)
            {{$client->client_total_sale[0]->total_sale}} EUR
            @else 
             0 EUR
            @endif
          </td>
          <td class="text-center bdr_top bdr_left">
            @if(count($client->client_last_booking)>0)
            {{date('d-M-Y',strtotime($client->client_last_booking[0]->last_booking))}}
            @endif
            </td>
          <td class="text-center bdr_top bdr_left">0 
            <!-- <span class="show_no_spn"><i class="fa fa-plus"></i></span> -->
            <span class="show_no_spn"><i class="fac">+</i></span>
          </td>
          <td class="text-center bdr_top bdr_left ">
            @if(isset($prof_client[$client->id]) && $prof_client[$client->id]=='block')
              <span class="client_status_spn_{{$client->id}}">Blocked</span>
              &nbsp;
            <div class='custom_sel' style="display:inline-block">
                <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span>
                <ul class="sts_ul one_rw">
                    <li class="client_status_active_{{$client->id}}">
                        <label onclick="active_client('{{$client->id}}')">
                            <span>Access</span>
                        </label>
                    </li>
                    <li class="client_status_block_{{$client->id}}"  style="display:none">
                        <label onclick="block_client('{{$client->id}}')">
                            <span>Block</span>
                        </label>
                    </li>
                </ul>
            </div>
            @else
              <span class="client_status_spn_{{$client->id}}">Access</span>
              &nbsp;
            <div class='custom_sel' style="display:inline-block">
                <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span>
                <ul class="sts_ul one_rw">
                    <li class="client_status_block_{{$client->id}}">
                        <label onclick="block_client('{{$client->id}}')">
                            <span>Block</span>
                        </label>
                    </li>
                    <li class="client_status_active_{{$client->id}}" style="display:none">
                        <label onclick="active_client('{{$client->id}}')">
                            <span>Access</span>
                        </label>
                    </li>
                    
                </ul>
            </div>
            @endif
            
             
          </td>
          <td class="text-center bdr_top bdr_left"><span class="trash_spn" onclick="remove_client('{{$client->id}}')"><i class="fa fa-trash-o"></i></span></td>
        </tr>  
      @endforeach
      @else

      <tr>
        <td colspan="8"  class="text-center bdr_top ">No record exist</td>
      </tr>
      @endif