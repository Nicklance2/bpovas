@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="middle-box text-center loginscreen animated fadeInDown" style="max-width: 450px; min-width: inherit; width: inherit;">
            <a href="/"><img src="css/images/logo-s.png"></a>
            <br><br>
            <h3>Create your account</h3>
            <br>
            <form method="POST" action="/register">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First name" name="first_name" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last name" name="last_name" required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Company" name="company" required="" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" name="phone" required="" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address" name="address" required="" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="City" name="city" required="" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="State" name="state" required="" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Zip Code" name="zipcode" required="" autocomplete="off">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="terms_accepted"> I have read ang agreed to the <br><a href="" data-toggle="modal" data-target="#termsofuseModal">BPO VAS TERMS OF USE</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-lg btn-success block full-width m-b" style="margin-top: 30px;">Sign Up</button>

                @include('layouts.errors')
            </form>

            <div class="modal inmodal fade in" id="termsofuseModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content text-left">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-close"></i></span><span class="sr-only">Close</span></button>
                            <h1 class="modal-title">BPO VAS TERMS OF USE</h1>
                            <h3>PLEASE READ THE TERMS AND CONDITIONS OF USE CAREFULLY BEFORE USING THIS SITE</h3>
                        </div>
                        <div class="modal-body">

                            <p>BPOVAS.com offers an online platform for brokers and real estate agents to utilize contractors and web technologies to manage their portfolios with valuation companies nationwide.
                            BPO VAS acts as an intermediary 3rd party to manage the transfer of payments between clients and contractors via the use of Merchants. By using this site,
                            you the user are agreeing to comply with and be bound by the following terms of use. After reviewing the following terms and conditions thoroughly,
                            if you do not agree to the terms and conditions, please do not use this site.</p>

                            <h3>1. Acceptance of Agreement.</h3>

                            <p>You agree to the terms and conditions outlined in this User Agreement with respect to our site (www.Turbo-BPO.com). This Agreement constitutes the entire and only
                            agreement between us and you, and supersedes all prior or contemporaneous agreements, representations, warranties and understandings with respect to the Site,
                            the content, offers or services provided by or listed on the Site, and the subject matter of this Agreement. This Agreement may be amended by us at any time
                            and at any frequency without specific notice to you.</p>

                            <h3>2. Indemnification.</h3>

                            <p>Under no circumstances shall we, our affiliates, its affiliates' officers, directors, and employees be liable for any direct, indirect, incidental,
                            special, punitive or consequential damages that result in any way from your use of the Web site, use, non-use or reliance upon the INFORMATION,
                            or that result from mistakes, omissions, interruptions or deletions of files, errors or defects in the INFORMATION, delays in operation, transmission
                            or failure of performance, whether or not such damages might have been foreseeable. If you are dissatisfied with any Information,
                            your sole and exclusive remedy is to discontinue using the Information.</p>

                            <h3>3. Service Marks.</h3>

                            <p>Turbo BPO and others are our service marks or registered service marks or trademarks. Other product and company names mentioned on the Site may be
                            trademarks of their respective owners.</p>

                            <h3>4. Limited License; Permitted Uses.</h3>

                            <p>You are granted a non-exclusive, non-transferable, revocable license (a) to access and use the Site strictly in accordance with this Agreement; (b)
                            to use the Site solely for internal, personal, associated, and business purposes only, limited to service offerings provided within the Site; and
                            (c) to print out discrete information from the Site solely for internal, personal, associated and business purposes only, limited to service offerings
                            provided within the Site, provided that you maintain all copyright and other policies contained therein. No printout or electronic version of any part
                            of the Site or its contents may be used by you in any litigation or arbitration matter whatsoever under any circumstances.</p>

                            <h3>5. Restrictions and Prohibitions on Use.</h3>

                            <p>Your license for access and use of the Site and any information, materials or documents (collectively defined as "Content and Materials") therein are subject to
                            the following restrictions and prohibitions on use: You may not (a) copy, print (except for the express limited purpose permitted by Section 5 above),
                            republish, display, distribute, transmit, sell, rent, lease, loan or otherwise make available in any form or by any means all or any portion of the Site or
                            any Content and Materials retrieved from it; (b) use the Site or any materials obtained from the Site to develop any information, storage and retrieval system,
                            database, information base, or similar resource (in any media now existing or hereafter developed), that is offered for commercial distribution of any kind,
                            including through sale, license, lease, rental, subscription, or any other commercial distribution mechanism; (c) create compilations or derivative works of any
                            Content and Materials from the Site; (d) use any Content and Materials from the Site in any manner that may infringe any copyright, intellectual property right,
                            proprietary right, or property right of us or any third parties; (e) remove, change or obscure any copyright notice or other proprietary notice or terms of use
                            contained in the Site; (f) make any portion of the Site available through any timesharing system, service bureau, the Internet or any other technology now existing
                            or developed in the future; (g) remove, decompile, disassemble or reverse engineer any Site software or use any network monitoring or discovery software to determine
                            the Site architecture; (h) use any automatic or manual process to harvest information from the Site; (i) use the Site for the purpose of gathering information for or
                            transmitting (1) unsolicited commercial email; (2) email that makes use of headers, invalid or nonexistent domain names, or other means of deceptive addressing; and
                            (3) unsolicited telephone calls or facsimile transmissions; (j) use the Site in a manner that violates any state or federal law regulating email, facsimile
                            transmissions or telephone solicitations; and (k) export or re-export the Site or any portion thereof, or any software available on or through the Site,
                            in violation of the export control laws or regulations of the United States.</p>

                            <h3>6. Forms, Agreements & Documents.</h3>

                            <p>We may make available through the Site or through other Web sites sample and actual forms, checklists, business documents and legal documents (collectively, "Documents").
                            All Documents are provided on a non-exclusive license basis only for your personal one-time use for non-commercial purposes, without any right to re-license, sublicense,
                            distribute, assign or transfer such license. Documents are provided for a charge and without any representations or warranties, express or implied, as to their suitability,
                            legal effect, completeness, currentness, accuracy, and/or appropriateness. THE DOCUMENTS ARE PROVIDED "AS IS," "AS AVAILABLE," AND WITH "ALL FAULTS,"
                            AND WE AND ANY PROVIDER OF THE DOCUMENTS DISCLAIM ANY WARRANTIES, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
                            The Documents may be inappropriate for your particular circumstances. Furthermore, state laws may require different or additional provisions to ensure the desired result.
                            You should consult with legal counsel to determine the appropriate legal or business documents necessary for your particular transactions, as the Documents are only samples
                            and may not be applicable to a particular situation. Some Documents are public domain forms or available from public records.</p>

                            <h3>7. Copyright.</h3>

                            <p>The content, organization, graphics, design, compilation, magnetic translation, digital conversion and other matters related to the Site are protected under
                            applicable copyrights, trademarks and other proprietary (including but not limited to intellectual property) rights. The copying, redistribution, use or
                            publication by you of any such matters or any part of the Site, except as allowed by Section 4 below, is strictly prohibited. You do not acquire ownership
                            rights to any content, document or other materials viewed through the Site. The posting of information or materials on the Site does not constitute a waiver
                            of any right in such information and materials. Some of the content on the site is the copyrighted work of third parties. ALL RESPONSIBILITY OR LIABILITY FOR
                            ANY DAMAGES CAUSED BY VIRUSES CONTAINED WITHIN THE ELECTRONIC FILE CONTAINING A FORM OR DOCUMENT IS DISCLAIMED.</p>

                            <h3>8. Limitation of Liability</h3>

                            <p>(a) We and any Affiliated Party shall not be liable for any loss, injury, claim, liability, or damage of any kind resulting in any way from (1) any errors
                            in or omissions from the Site or any services or products obtainable there from, (2) the unavailability or interruption of the Site or any features thereof,
                            (3) your use of the Site, (4) the content contained on the Site, or (5) any delay or failure in performance beyond the control of a Covered Party.</p>

                            <p>(b) THE AGGREGATE LIABILITY OF US AND THE AFFILIATED PARTIES IN CONNECTION WITH ANY CLAIM ARISING OUT OF OR RELATING TO THE SITE AND/OR THE PRODUCTS,
                            INFORMATION, DOCUMENTS AND SERVICES PROVIDED HEREIN OR HEREBY SHALL NOT EXCEED $100 AND THAT AMOUNT SHALL BE IN LIEU OF ALL OTHER REMEDIES WHICH YOU MAY
                            HAVE AGAINST US AND ANY AFFILIATED PARTY.</p>

                            <h3>9. Use of Information.</h3>

                            <p>We reserve the right, and you authorize us, to the use and assignment of all information regarding Site uses by you and all information provided by
                            you in any manner consistent with our Privacy Policy. All remarks, suggestions, ideas, graphics, or other information communicated by you to us (collectively,
                            a "Submission") will forever be our property. We will not be required to treat any Submission as confidential, and will not be liable for any ideas (including
                            without limitation, product, service or advertising ideas) and will not incur any liability as a result of any similarities that may appear in our future products,
                            services or operations. Without limitation, we will have exclusive ownership of all present and future existing rights to the Submission of every kind and nature everywhere.
                            We will be entitled to use the Submission for any commercial or other purpose whatsoever, without compensation to you or any other person sending the Submission.
                            You acknowledge that you are responsible for whatever material you submit, and you, not us, have full responsibility for the message, including its legality, reliability,
                            appropriateness, originality, and copyright.</p>

                            <p>In compliance with the Children's Online Privacy Protection Act of 1998, Turbo-BPO.com does not accept registrations from those less than 18 years of age.
                            By registering with us, you represent that you are at least 18 years old.</p>

                            <h3>10. Third-Party Services.</h3>

                            <p>We may allow access to or advertise certain third-party product or service providers ("Contractors") from which you may purchase certain goods or services.
                            You understand that we do not operate or control the products or services offered by Contractors. Contractors are responsible for all aspects of order
                            and photo processing, fulfillment, and quality controls. You agree that use of or purchase from such Contractors is AT YOUR SOLE RISK AND IS WITHOUT
                            WARRANTIES OF ANY KIND BY US, EXPRESSED, IMPLIED OR OTHERWISE INCLUDING WARRANTIES OF TITLE, FITNESS FOR PURPOSE, AND MERCHANTABILITY OR NON-INFRINGEMENT.
                            UNDER NO CIRCUMSTANCES ARE WE LIABLE FOR ANY DAMAGES ARISING FROM THE TRANSACTIONS BETWEEN YOU AND CONTRACTORS OR FOR ANY INFORMATION APPEARING ON CONTRACTOR
                            SITES OR ANY OTHER SITE LINKED TO OUR SITE.</p>

                            <h3>11. Third-Party Merchant Policies.</h3>

                            <p>All rules, policies (including privacy policies) and operating procedures of Merchants will apply to you while on any Merchant sites. We are not responsible
                            for information provided by you to Contractors. Neither party has authority to make any representations or commitments on behalf of the other.</p>

                            <h3>12. Disintermediation.</h3>

                            <p>Clients shall provide all payments related to, or in any way connected with Turbo-BPO.com services, through the Turbo-BPO.com Platform.
                            Any action that encourages or solicits complete or partial payment outside of the Turbo-BPO.com Platform is a violation of this Agreement. Should a client be found
                            in violation of this section of this Agreement, it will owe Turbo-BPO.com fees equal to the greater of a) $2,500; or b) the applicable fees had the payments been
                            processed through the Turbo BPO Platform plus 25%. Client shall immediately notify Turbo BPO if a contractor requests payment through any channels other than
                            those provided or specified by Turbo BPO. Contractor shall not accept any payments related to Turbo BPO services (including, without limitation, bonuses)
                            from a client directly or through any payment channels other than the Turbo-BPO.com Platform. Contractor shall immediately notify Turbo BPO if a client attempts
                            to make a payment to Contractor directly or through any payment channels other than those provided or specified by Turbo-BPO.com.</p>

                            <h3>13. Linking to the Site.</h3>

                            <p>You may provide links to the Site, provided (a) that you do not remove or obscure, by framing or otherwise, advertisements, the copyright notice,
                            or other notices on the Site, (b) your site does not engage in illegal or pornographic activities, and (c) you discontinue providing links to the Site
                            immediately upon request by us.</p>

                            <h3>14. Advertisers.</h3>

                            <p>The Site may contain advertising and sponsorships. Advertisers and sponsors are responsible for ensuring that material submitted for inclusion on the Site
                            is accurate and complies with applicable laws. We are not responsible for the illegality or any error, inaccuracy or problem in the advertiser's or sponsor's materials.</p>

                            <h3>15. Registration/Purchase.</h3>

                            <p>Certain sections of, or offerings from, the Site may require you to register. If registration is requested, you agree to provide us with accurate,
                            complete registration and/or purchase information. Your registration must be done using accurate information. Each registration is for your personal use only.
                            We do not permit (a) any other person using the registered sections under your name; or (b) access through a single name being made available to multiple users on a network.
                            You are responsible for preventing such unauthorized use.</p>

                            <h3>16. Errors, Corrections and Changes.</h3>

                            <p>We do not represent or warrant that the Site will be error-free, free of viruses or other harmful components, or that defects will be corrected.
                            We do not represent or warrant that the information available on or through the Site will be correct, accurate, timely or otherwise reliable.
                            We may make changes to the features, functionality or content of the Site at any time. We reserve the right in our sole discretion to edit or delete
                            any documents, information or other content appearing on the Site.</p>

                            <h3>17. Third-Party Content.</h3>

                            <p>Third-party content may appear on the Site or may be accessible via links from the Site. We are not responsible for and assume no liability for any mistakes,
                            misstatements of law, defamation, omissions, falsehood, obscenity, pornography or profanity in the statements, opinions, representations or any other form of
                            content on the Site. You understand that the information and opinions in the third-party content represent solely the thoughts of the author and is neither endorsed
                            by nor does it necessarily reflect our belief. Advertising and sponsored links found on content pages from third-party providers are not provided by those content
                            providers and are not endorsements.</p>

                            <h3>18. Unlawful Activity.</h3>

                            <p>We reserve the right to investigate complaints or reported violations of this Agreement and to take any action we deem appropriate,
                            including but not limited to reporting any suspected unlawful activity to law enforcement officials, regulators, or other third parties and disclosing any
                            information necessary or appropriate to such persons or entities relating to your profile, email addresses, usage history, posted materials, IP addresses and traffic information.</p>

                            <h3>19. Termination.</h3>

                            <p>You agree that we, in our sole discretion, may terminate your membership, and remove and discard any content that you have posted on the Site, for any reason,
                            including, without limitation, for lack of use or if we, in our sole opinion, believe that you have violated or acted inconsistently with the letter or spirit
                            of this Agreement or that you are a repeat infringer of intellectual property rights. You agree that any termination of your access to the Site under any provision
                            of this Agreement may be effected without prior notice, and acknowledge and agree that we may immediately deactivate or delete your account and all related information
                            and files in your account and/or bard any further access to such files or the Site. Further, you agree that we shall not be liable to you or any third-party for any
                            termination of your access to the Site.</p>

                            <h3>20. Non-transferable.</h3>

                            <p>Your right to use the Site is not transferable or assignable. Any password or right given to you to obtain information or documents is not transferable or assignable.</p>

                            <h3>21. Disclaimer.</h3>

                            <p>THE INFORMATION, CONTENT AND DOCUMENTS FROM OR THROUGH THE SITE ARE PROVIDED "AS-IS," "AS AVAILABLE," WITH "ALL FAULTS," AND ALL WARRANTIES, EXPRESS OR IMPLIED,
                            ARE DISCLAIMED (INCLUDING BUT NOT LIMITED TO THE DISCLAIMER OF ANY IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE). THE INFORMATION
                            AND SERVICES MAY CONTAIN BUGS, ERRORS, PROBLEMS OR OTHER LIMITATIONS. WE AND OUR AFFILIATED PARTIES HAVE NO LIABILITY WHATSOEVER FOR YOUR USE OF ANY INFORMATION OR
                            SERVICE, EXCEPT AS PROVIDED IN SECTION 5. IN PARTICULAR, BUT NOT AS A LIMITATION THEREOF, WE AND OUR AFFILIATED PARTIES ARE NOT LIABLE FOR ANY INDIRECT, SPECIAL,
                            INCIDENTAL OR CONSEQUENTIAL DAMAGES (INCLUDING DAMAGES FOR LOSS OF BUSINESS, LOSS OF PROFITS, LITIGATION, OR THE LIKE), WHETHER BASED ON BREACH OF CONTRACT, BREACH
                            OF WARRANTY, TORT (INCLUDING NEGLIGENCE), PRODUCT LIABILITY OR OTHERWISE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THE NEGATION AND LIMITATION OF DAMAGES
                            SET FORTH ABOVE ARE FUNDAMENTAL ELEMENTS OF THE BASIS OF THE BARGAIN BETWEEN US AND YOU. THIS SITE AND THE PRODUCTS, SERVICES, DOCUMENTS AND INFORMATION PRESENTED
                            WOULD NOT BE PROVIDED WITHOUT SUCH LIMITATIONS. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM US THROUGH THE SITE OR OTHERWISE SHALL CREATE
                            ANY WARRANTY, REPRESENTATION OR GUARANTEE NOT EXPRESSLY STATED IN THIS AGREEMENT.</p>

                            <h3>22. Unavailability.</h3>

                            <p>You acknowledge that this Web site may be occasionally unavailable due to such periodic maintenance or to other unexpected interruptions, and we are not responsible for
                            inaccessibility during such downtimes.</p>

                            <h3>23. Modifications.</h3>

                            <p>We may modify the content of this Web site or this Agreement at any time without notice. We make no guarantee that the content offered on this Web site will remain
                            available for any specific period of time.</p>

                            <h3>24. Payments.</h3>

                            <p>You represent and warrant that if you are purchasing something from us or from Contractors that (i) any credit information you supply is true and complete,
                            (ii) charges incurred by you will be honored by your credit card company, and (iii) you will pay the charges incurred by you at the posted prices, including any applicable taxes.</p>

                            <h3>25. Information and Press Releases.</h3>

                            <p>The Site may contain information and press releases about us. We disclaim any duty or obligation to update this information or any press releases.
                            Information about companies other than ours contained in the press release or otherwise, should not be relied upon as being provided or endorsed by us.</p>

                            <h3>26. Legal Compliance.</h3>

                            <p>You agree to comply with all applicable domestic and international laws, statutes, ordinances and regulations regarding your use of the Site and the Content
                            and Materials provided therein.</p>

                            <h3>27. Miscellaneous. </h3>

                            <p>This Agreement shall be treated as though it were executed and performed in the state of Florida and shall be governed by and construed in
                            accordance with the laws of the state of Florida (without regard to conflict of law principles). Any cause of action by you with respect to the Site (and/or any
                            information, Documents, products or services related thereto) must be instituted within one (1) year after the cause of action arose or be forever waived and barred.
                            All actions shall be subject to the limitations set forth in Section 9 and Section 22. The language in this Agreement shall be interpreted as to its fair meaning and
                            not strictly for or against any party. Any rule of construction to the effect that ambiguities are to be resolved against the drafting party shall not apply in interpreting
                            this Agreement. This Agreement and all incorporated agreements and your information may be automatically assigned by us in our sole discretion to a third party in the event
                            of an acquisition, sale or merger. If any provision of this agreement is held illegal, invalid or unenforceable for any reason, that provision shall be enforced to the maximum
                            extent permissible, and the other provisions of this Agreement shall remain in full force and effect. If any provision of this Agreement is held illegal, invalid or unenforceable,
                            it shall be replaced, to the extent possible, with a legal, valid, and unenforceable provision that is similar in tenor to the illegal, invalid, or unenforceable provision as
                            is legally possible. To the extent that anything in or associated with the Site is in conflict or inconsistent with this Agreement, this Agreement shall take precedence.
                            Our failure to enforce any provision of this Agreement shall not be deemed a waiver of such provision nor of the right to enforce such provision. Our rights under this
                            Agreement shall survive any termination of this Agreement. The title, headings and captions of this Agreement are provided for convenience only and shall have no effect
                            on the construction of the terms of this agreement.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection