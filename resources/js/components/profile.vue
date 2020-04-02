<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5" >

            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user" >
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info" style="background-image: url('./images/4.jpg')">
                <h3 class="widget-user-username">Alexander Pierce</h3>
                <h5 class="widget-user-desc">Founder &amp; CEO</h5>
              </div>
              <div class="widget-user-image" >
                <!-- 显示头像可以绑定到data或method方法 -->
                <img class="img-circle elevation-2" :src="avatarsrc" alt="User Avatar">
                <!-- <img class="img-circle elevation-2" :src="getAvatar()" alt="User Avatar"> -->
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
     <!-- **************************** -->

            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
<!-- Tab1-pane                     -->
                  <div class="tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="#" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="#" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="#" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="#" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="#" alt="Photo">
                              <img class="img-fluid" src="#" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="#" alt="Photo">
                              <img class="img-fluid" src="#" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
  <!-- End Tab1-pane                     -->
                
  <!-- /.tab-pane2 -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      timeline item
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="#" alt="...">
                            <img src="#" alt="...">
                            <img src="#" alt="...">
                            <img src="#" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
  <!-- /.tab-pane2 -->
<!-- tab-pane3 -->
<!-- V-form表单验证注意：
1.在input标签内需要添加:class="{ 'is-invalid': form.errors.has('name') }"绑定样式类
2.在input后添加has-error标签
3.后台需要返回操作laravel本身的操作结果或如果自定义了返回条件在验证不通过的情况下到方法末尾返回请求（ return $request;）
 -->
                  <div class="tab-pane active" id="settings">
                    <form @submit.prevent="updateProfile" @keydown="form.onKeydown($event)" 
                    enctype="multipart/form-data"
                    >
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="name" class="form-control"  :class="{ 'is-invalid': form.errors.has('name') }" v-model="form.name" id="inputName" placeholder="Name">
                        <has-error :form="form" field="name"></has-error>

                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control"  :class="{ 'is-invalid': form.errors.has('name') }" v-model="form.email" id="inputEmail" placeholder="Email">
                        <has-error :form="form" field="email"></has-error>
                        </div>
                      </div>
                      <!-- photo -->
                      <div class="form-group row">
                        <label for="photo" class="col-sm-2 control-label">Profile Photo</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="selectFile" name="photo" @change="putPhoto">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" name="bio" v-model="form.bio" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" name="type" v-model="form.type">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#" data-toggle="modal" data-target="#exampleModal">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success" id="submit">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
<!-- End tab-pane3 -->

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          
     <!-- ******************************** -->
          


            </div>
        </div>
<!-- Modal********************* -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terms and conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
Terms and conditions

These terms and conditions (“Terms and Conditions”) apply to your use of all Elsevier websites, applications, services and products (“Services” or individually a “Service”) that post a link to these Terms and Conditions and that are provided by any Elsevier group company worldwide ("Elsevier", "we", "us" or "our").

By accessing or using any of the Services, you agree to be bound by these Terms and Conditions. These Terms and Conditions expressly incorporate by reference and include the Service's Privacy Policy and any guidelines, policies or additional terms or disclaimers that may be posted and/or updated on the Service or on notices that are sent to you. If you do not agree with these Terms and Conditions, please do not use the Services.
Using our services

Unless otherwise set out herein, content comprised within the Services, including text, graphics, user interfaces, visual interfaces, photographs, trademarks, logos, videos, audio, images, applications, programs, computer code and other information (collectively, the "Content"), including but not limited to the design, layout, “look and feel” and arrangement of such Content, is owned by Elsevier, its licensors or its content providers and is protected by copyright, trademark and other intellectual property and unfair competition laws.

RELX and the RE symbol are trade marks of RELX Group plc, used under license.

Except as otherwise provided in any additional terms for a Service, you may print or download Content from the Services for your own personal, non-commercial, informational or scholarly use, provided that you keep intact all copyright and other proprietary notices.

You may not copy, display, distribute, modify, publish, reproduce, store, transmit, post, translate or create other derivative works from, or sell, rent or license all or any part of the Content, or products or services obtained from the Services, in any medium to anyone, except as otherwise expressly permitted under these Terms and Conditions, or any relevant license or subscription agreement or authorization by us.

You may not reverse engineer, disassemble, decompile or translate any software in the Content, or otherwise attempt to derive the source code of such software, except to the extent expressly permitted under applicable law, without our prior written permission. You may not engage in the systematic retrieval of Content from the Services to create or compile, directly or indirectly, a collection, compilation, database or directory without our prior written permission.

You may not use any robots, spiders, crawlers or other automated downloading programs, algorithms or devices, or any similar or equivalent manual process, to: (i) continuously and automatically search, scrape, extract, deep link or index any Content; (ii) harvest personal information from the Services for purposes of sending unsolicited or unauthorized material; or (iii) cause disruption to the working of the Services or any other person’s use of the Services. If the Services contain robot exclusion files or robot exclusion headers, you agree to honor them and not use any device, software or routine to bypass them. You may not attempt to gain unauthorized access to any portion or feature of the Services, any other systems or networks connected to the Services or to any Elsevier server, or any of the products or services provided on, accessed from or distributed through the Services. You may not probe, scan or test the vulnerability of the Services or any network connected to the Services or breach or attempt to breach the security or authentication measures on the Services or any network connected to the Services.

You may not, without the approval of Elsevier, use the Services to publish or distribute any advertising, promotional material, or solicitation to other users of the Services to use any goods or services. For example (but without limitation), you may not use the Services to conduct any business, to solicit the performance of any activity that is prohibited by law, or to solicit other users to become subscribers of other information services. Similarly, you may not use the Services to download and redistribute public information or shareware for personal gain or distribute multiple copies of public domain information or shareware.
Content provided to us or posted on or through the service

Some of our Services allow you to upload, submit, store, send or receive content. Except as otherwise provided in any additional terms or agreements for or relating to a Service, we do not claim ownership of any content, application or other material that you or third parties provide to us (including feedback and suggestions) or post, upload, input or submit on or through the Services, including our blog pages, message boards, comment or discussion features, chat rooms and forums, for review by Elsevier and its suppliers or licensors, the general public, registered users of the Services, or by the members of any public or private community ("Submission"), and you retain ownership of any intellectual property rights that you hold in the Submission. We are not responsible for the content, accuracy or compliance with relevant laws or regulations of any Submission that contains content that is not owned by Elsevier. However, by posting, uploading, inputting, providing or submitting ("Posting") a Submission, you grant us (and those we work with) a royalty-free, perpetual, irrevocable, worldwide, non-exclusive right and license to publish, post, reformat, index, archive, make available, link to, and otherwise use such Submission in all forms and media (whether now known or later developed), in connection with the operation of our respective businesses (including, without limitation, the Services) and to permit others to do so. You shall not make any Submission anonymously, and you warrant and represent that any such Submission is original, and has been written by you. We are under no obligation to display or otherwise use any Submission you may provide, and we may remove any Submission at any time in our sole discretion. By Posting such a Submission, you also warrant and represent that you own or otherwise control all of the rights to your Submission including, without limitation, all the rights necessary for granting the permission specified above.

You may not use the Services to publish or distribute any information (including software or other content) which is illegal, which violates or infringes upon the rights of any other person, which is defamatory, abusive, hateful, profane, pornographic, threatening or vulgar, which contains errors, viruses or other harmful components, or which is otherwise actionable at law. Elsevier may at any time exercise editorial control over the Content of the Services.

We shall have the right, but not the obligation, to monitor Submissions to determine compliance with these Terms and Conditions and any operating rules we establish and to satisfy any law, regulation or authorized government request. We shall have the right in our sole discretion to edit, refuse to post, or remove any Submission.
Notification of infringement

Notifications regarding any alleged intellectual property infringement should be directed to the Elsevier Legal Department by email addressed to DMCA@elsevier.com.
Links

The Services may contain links to third-party sites or resources. We do not endorse and are not responsible or liable for any content, advertising, products or other materials on or available from external sites or resources linked to the Services. Transactions that occur between you and any third party are strictly between you and the third party and are not the responsibility of Elsevier.

Elsevier welcomes you to link to the Services. You may establish a hypertext link to the Services, provided that the link does not state or imply any sponsorship or endorsement of your site, company, product and/or service by Elsevier. You may not use on your site any trademarks, service marks or copyrighted materials appearing on the Services, including but not limited to any logos, without the express written consent or an explicit license of the owner of the mark or right. You may not frame or otherwise incorporate into another site any of the Content or other materials on the Services without prior written consent of Elsevier.
Disclaimer of warranties and liability

We provide the Services using a commercially reasonable level of skill and care, but neither Elsevier nor its suppliers or licensors make any specific promises about the Services, including the Content or any Submission therein. For example, we don’t make any commitment that the operation of the Services will be uninterrupted or error-free; that any defects will be corrected; that the Services, including the server that makes them available, are free of viruses or other harmful components; or as to the accuracy, completeness, reliability, availability, suitability, quality, non-infringement, operation or result obtained from the use of any Content or Submission provided on, accessible from or distributed through the Services.

ELSEVIER AND ITS SUPPLIERS AND LICENSORS PROVIDE THE SERVICES AND ALL CONTENT AND ANY SUBMISSION INCLUDED IN OR ACCESSIBLE FROM THE SERVICES "AS IS" AND WITHOUT WARRANTIES OR REPRESENTATIONS OF ANY KIND (EXPRESS, IMPLIED AND STATUTORY, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF TITLE AND NONINFRINGEMENT AND THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE), ALL OF WHICH ELSEVIER AND ITS SUPPLIERS AND LICENSORS DISCLAIM TO THE FULLEST EXTENT PERMITTED BY LAW. YOUR USE OF THE SERVICES AND ALL CONTENT AND SUBMISSIONS, INCLUDED IN OR ACCESSIBLE FROM THE SERVICES ARE AT YOUR SOLE RISK.

To the extent permitted under applicable law, neither Elsevier nor its suppliers and licensors assume responsibility for any injury and/or damage to persons, animals or property as a matter of products liability, malpractice, failure to warn, negligence or otherwise, or from any use or operation of any ideas, instructions, methods, tests, products or procedures displayed on the Services or incorporated in the Content or any Submission included in or accessible from the Services. Practitioners and researchers must rely on their own experience, knowledge and judgment in evaluating or applying any information, which remains their professional responsibility.  Because of rapid advances in the medical sciences and changes in government regulations and clearances, we recommend that independent verification of diagnoses, treatments, indications choice of drugs and drug dosages should be made. Discussions, views, and recommendations expressed may not be considered absolute and universal for every situation. Elsevier remains neutral with regard to jurisdictional claims in published maps and institutional affiliations. Elsevier will not be liable for the failure by any user of the Services, Content or Submission to use due care in the use and validation of results made available through the Services or included in the Content or any Submission, nor will Elsevier be liable for any medical treatment provided by users to their patients, whether or not the Services, Content or Submission were used in connection with such treatment.

TO THE EXTENT PERMITTED UNDER APPLICABLE LAW, IN NO EVENT SHALL ELSEVIER OR ITS SUPPLIERS OR LICENSORS BE LIABLE FOR ANY DAMAGES (INCLUDING, WITHOUT LIMITATION, CONSEQUENTIAL, SPECIAL, INCIDENTAL, INDIRECT, OR SIMILAR DAMAGES, PERSONAL INJURY (INCLUDING DEATH), LOSS OF PROFITS, CORRUPTION OR LOSS OF DATA, BUSINESS INTERRUPTION OR ANY OTHER COMMERCIAL DAMAGES OR LOSSES) ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THE SERVICES OR THE CONTENT OR SUBMISSIONS, OR SHALL THE LIABILITY OF ELSEVIER OR ITS SUPPLIERS AND LICENSORS EXCEED A SUM EQUAL TO THE FEES PAID BY YOU HEREUNDER, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.

Elsevier does not claim ownership, endorse or take responsibility for any third-party products, information, guidelines, materials or services that may be offered, advertised, provided or displayed on the Service or incorporated in the Content or any Submission contained on, accessible from or distributed through the Services.
Indemnification

You hereby agree to indemnify and hold Elsevier, its directors, officers, shareholders, predecessors, successors in interest, employees, agents, suppliers and licensors harmless from and against any and all third-party claims of liability, losses, damages and costs, including, without limitation, reasonable attorneys' or legal fees, arising out of or in connection with your violation of these Terms and Conditions, and your use of or inability to use any of the Services or the Content or Submissions.
Registered user grant of license

Some sites may require you to register. If registration is required, you agree to provide accurate and complete registration information. It is your responsibility to inform Elsevier of any changes to that information. Each registration is for a single individual only, unless specifically designated otherwise on the registration page. Elsevier does not permit a) anyone other than you to use the sections requiring registration by using your name or password; or b) access through a single name being made available to multiple users on a network or otherwise. As a registered user of a Service, Elsevier grants to you a non-transferable, non-exclusive and revocable license to use the Service according to these Terms and Conditions. Except as expressly granted herein or in any other agreement you have with Elsevier, you acquire no right, title or license in the Service or any Content or Submission accessed from or incorporated in the Service.
Password use and security

If you use a password to access a Service, you must not reveal your password and must take reasonable steps to keep your password confidential and secure. You agree to immediately notify Elsevier if you become aware of or have reason to believe that there is any unauthorized use of your password or account or any other breach of security. Elsevier is in no way liable for any claims or losses related to the use or misuse of your password or account due to the activities of any third party outside of our control or due to your failure to maintain their confidentiality and security.
About these terms and conditions

Term and Termination: Any license granted to you to use any Service is effective until it expires, until Elsevier terminates it, or until you provide notice to Elsevier of your decision to terminate it. Your rights under the license will terminate automatically without notice to you if you fail to comply with any of the provisions of these Terms and Conditions. Elsevier reserves the right to suspend, discontinue or change a Service, or its availability to you, at any time without notice. Upon termination of the license to a Service, you shall cease all use of the Service.

Export Controls: Where the Service, its Content or any Submission consist of software that is subject to US, EU or any other Export Controls, you represent and warrant that (i) you are not located in a country that is subject to a U.S. Government, EU  or other embargo, or that has been designated by the U.S. Government or the EU as a “terrorist supporting” country; and (ii) you are not listed on any U.S. Government, EU or any other list of prohibited or restricted parties.

No Assignment: You may not assign your rights or obligations under these Terms and Conditions to anyone.

No Waiver: Neither failure nor delay on the part of Elsevier to exercise or enforce any right, remedy, power or privilege hereunder nor course of dealing between the parties shall operate as a waiver thereof, or of the exercise of any other right, remedy, power or privilege. No part of these Terms and Conditions shall be deemed waived, and no breach consented to, unless such waiver or consent shall be in writing and signed by the party claimed to have waived or consented. No waiver of any rights or consent to any breaches shall constitute a waiver of any other rights or consent to any other breach.

Additional Terms: Additional or superceding terms and conditions may apply to purchases or supply of goods or services including intellectual property, to specific portions or features of a Service, and to subscriptions or licenses with institutions with which you may be employed or affiliated. If there is a conflict between these Terms and Conditions and the terms that are posted for or applicable to a specific portion of the Service, for any service offered on or through the Service, or set forth in an institutional subscription or license agreement, the latter terms shall control.

Compliance with Laws: You agree to comply with relevant laws and regulations that apply to your use of the Services, Content or any Submission.

Severability: If any provision in these Terms and Conditions is held invalid or unenforceable under applicable law, the remaining provisions shall continue in full force and effect.

Governing Laws and Venue: All matters relating to your access to or use of the Services, including all disputes, shall be governed by and construed in accordance with the laws of The Netherlands, without regard to its conflicts of law principles, except if you reside outside of the European Union, then the laws of the country of the Elsevier regional office in the region where you reside will apply. The exclusive jurisdiction and venue with respect to any action or suit arising out of or pertaining to the subject matter hereof shall be the courts of competent jurisdiction located in Amsterdam, The Netherlands, except if you reside outside of the European Union, then the courts located in the country of the Elsevier regional office in the region where you reside will have exclusive jurisdiction. Any claim arising out of or in connection with your use of or inability to use the Service or the Content or any Submission must be brought within one (1) year after the event or such claim is barred.

Changes: Elsevier reserves the right to change, modify, add or remove portions of these Terms and Conditions at its sole discretion at any time and without prior notice. Please check these Terms and Conditions periodically for any modifications. Your continued use of any Service following the posting of any changes will mean that you have accepted and agreed to the changes.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

<!-- Modal********************** -->
    </div>
</template>

<script>
    export default {
        data(){
            return{                
                form:new Form({
                    id:'',
                    name:'',
                    email:'',
                    password:'',
                    photo:'',
                    bio:'',
                    type:'',
                    photoname:'',
                }),
                avatarsrc:'',
            }
        },
        methods:{ 
            getAvatar:function(){
                    // return './img/test/profile/'+this.form.photo; 
            },
            setAvatar:function(url){
                this.avatarsrc=url;
            },       
            putPhoto:function(e){
                console.log('put photo ready for uploading............');
                let file=e.target.files[0];
                // // 文件大小自动转换单位及数字file.size
                // // @size 文件尺寸
                // // @digital 结果小数位数
                // // @return 字符或数组，根据第3个参数决定
                // function fsizeFormat(size,digital,flag=0){
                //     let u=['KB','MB','GB','TB'];
                //     let k=0;
                //     let res='';
                //     let resarr=[];
                //     let convert=(Math.pow(10,digital));
                //     while(size>1024){
                //         size=size/1024;
                //         // alert(res);
                //         k++;
                //     }
                //     res= Math.round(size*convert)/convert;//四舍五入为两位小数
                //     if(flag){ 
                //     resarr[0]=res;
                //     resarr[1]=u[k-1];                           
                //         return resarr;//返回数组的数值及单位
                //     }else{                            
                //         return res+u[k-1]//返回字符带上单位
                //     }
                // }
                // alert(fsizeFormat(file.size,1));//不加第3个参数默认返回字符串
                // alert(fsizeFormat(file.size,1,1)[0]+fsizeFormat(file.size,1,1)[1]);//第3个参数为1返回数组
                // 文件大小限制
                // let filesize=(file.size/1024);//KB
                let filesize=(file.size/1024/1024);//MB
                filesize= Math.round(filesize*100)/100;//四舍五入为两位小数
                //如果选择的文件大于限制则发出提示重新选择
                if(filesize > 2){
                      swalt.fire({
                        title: 'File selected over limitation',
                        text: "File selected "+filesize+"MB over limitation 2 MB",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Reselect'
                        }).then((result) => {
                          if (result.value) { 
                                // // 模拟点击选择文件
                                // 一、创建事件：var ev = document.createEvent('CustomEvent');
                                // 二、初始化事件：ev.initCustomEvent('自定义事件名称', false(是否允许冒泡), false(是否允许中断),args)
                                // 三、为DOM添加事件监听：element.addEventListener('自定义事件名称',fn,false)
                                // 四、分发(触发)自定义事件：element.dispatchEvent(ev)
                                // 创建事件类型参考：https://developer.mozilla.org/zh-CN/docs/Web/API/Document/createEvent
                                // 事件类型对应的事件名参考：https://www.w3.org/TR/DOM-Level-3-Events/#events-Events-DocumentEvent-createEvent
                            // // 模拟点击
                            var e = document.createEvent("MouseEvents");
                                e.initEvent("click", true, true);
                                document.getElementById("selectFile").dispatchEvent(e);
                          };
                        });
                    return;//如果图片超过尺寸直接返回
                }
                // console.log(file.name);
                // console.log(file.type);
                this.form.photoname=file.name//赋值给form中的文件名方便后台使用
                let reader = new FileReader();
                reader.onloadend = (file)=>{
                    // console.log('Result',reader.result)
                this.form.photo=reader.result;
                }
                reader.readAsDataURL(file);
                console.log('Photo loaded *****************');
            },
            updateProfile:function(){
                console.log('提交更新profile222')
                this.form.patch("api/profile/")
                    .then((request)=>{
                        if(request.data['status']=='OK'){
                            swalt.fire({
                              icon: 'success',
                              title: 'Users profile updated successfully!'
                            });
                            //如果有图片更新后会传回文件名
                            if(request.data['img']){
                                this.avatarsrc='./img/test/profile/'+request.data['img'];
                                // this.form.photo='';//需要清空form中的photo
                            }
                        }else{
                            swalt.fire({
                              icon: 'Failed',
                              title: 'Something wrong with profile updated, please try again or feedback to admin!'
                            })
                            }

                    })
                    // .then(()=>{setAvatar('./img/test/profile/'+request.data['img'])})
                    .then((request)=>{console.log(request.data)})
                    .catch(()=>{})
                }
            
        },
        created(){
            // 从后台取数据给到form结合v-model显示出来
            axios.get("api/profile")
                .then(({data})=>(
                this.form.fill(data)
                // console.log(data)
                )).then(()=>{
                this.setAvatar('./img/test/profile/'+this.form.photo);
            }).then(
            ()=>{
                //核心问题烦恼：总是提交显示服务器错误（"[HTTP/1.1 500 Internal Server Error 578ms]"）,是因为前台提交Base64格式的图片到后台，后台接收后转换储存。但存入数据库的是图片名称。取出数据用form插件填充的form.photo为数据库中储存的图片名称。因此加载完成后要把它清空，不然提交的时候form.photo中的不再是base64格式的数据。
                this.form.photo='';//创建页面后需要清空form中的photo

            })


        },
        mounted() {
            console.log('Component mounted.')

        }
    }
</script>
