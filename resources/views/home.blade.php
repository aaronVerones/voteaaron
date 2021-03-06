@extends('layouts.basic')

@section('content')

<body class="index-page">
	<!-- Navbar -->

	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
		<div class="container">
			<div class="navbar-header">
				<div class="logo-container">
					<div class="brand">
						Aaron Verones for AMS VP Admin
					</div>
				</div>
			</a>
		</div>
		<div>
			<ul class="nav navbar-nav navbar-right top-nav">
				<li>
					<a href="endorse" class="endorse-btn btn btn-info" >Endorse</a>
				</li>
				<li>
					<a href="vote" class="vote-btn btn btn-success" >Vote</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<img src="assets/img/cover2880.png" class="big-photo img-responsive"alt="">
	<img src="assets/img/profile_pic_1242w.png" class="small-photo img-responsive"alt="">

	<div class="main main-raised">
		{{-- START CONTENT --}}
		<div class="section section-basic">
			<div class="container">

				{{--PLATFORM--}}
				<div class="col-md-6">
					<div class="title">
						<h3>Platform</h3>
					</div>
					<!-- Tabs with icons on Card -->
					<div class="card card-nav-tabs">
						<div class="header header-success">
							<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
							<div class="nav-tabs-navigation">
								<div class="nav-tabs-wrapper">
									<ul class="nav nav-tabs" data-tabs="tabs">
										<li class="active">
											<a href="#platform-information" data-toggle="tab">
												<i class="material-icons">info_outline</i>
												Information Quality
											</a>
										</li>
										<li>
											<a href="#platform-space" data-toggle="tab">
												<i class="material-icons">event</i>
												Space Availability
											</a>
										</li>
										<li>
											<a href="#platform-money" data-toggle="tab">
												<i class="material-icons">attach_money</i>
												Money
											</a>
										</li>
										<li>
											<a href="#platform-sustainability" data-toggle="tab">
												<i class="material-icons">all_inclusive</i>
												Sustainability
											</a>
										</li>
										<li>
											<a href="#platform-other" data-toggle="tab">
												<i class="material-icons">more_horiz</i>
												Other
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="content">
							<div class="tab-content ">
								<div class="tab-pane active" id="platform-information">
									<label class="platform-label" >
										I will improve communication and information from the VP Admin Office by:
									</label>
									<ul class="platform-ul">
										<li><strong>Re-designing the AMS website</strong>
											to improve accessibility and creating system for updating all information on it
										</li>
										<li><strong>Improving the club resources</strong>
											that clubs are dissatisfied with - e.g. clubs handbook, clubhouse use procedures
										</li>
										<li><strong>Reducing wait time</strong>
											to hear from VP Admin portfolio by making internal procedures more efficient
										</li>
									</ul>
								</div>
								<div class="tab-pane" id="platform-space">
									<label class="platform-label" >
										I will Increase Space Availability and Operational Efficiency by:
									</label>
									<ul class="platform-ul">
										<li><strong>Performing a review of AMS bookings</strong>
											with the goal of reducing wait times, decreasing double-bookings, and giving priority to student groups.
											I will also find ways to utilize empty UBC spaces more effectively.
										</li>
										<li><strong>Ensure a smooth Old Sub Basement opening</strong>
											through careful planning and working with Pooja
										</li>
										<li><strong>Prioritize time-sensitive tasks from clubs</strong>
											like signing contracts
										</li>
										<li><strong>Address bugs and usability issues</strong>
											in Clubhouse
										</li>
									</ul>
								</div>
								<div class="tab-pane" id="platform-money">
									<label class="platform-label" >
										I will feed more money back into funding students by:
									</label>
									<ul class="platform-ul">
										<li><strong>Spending money from inside-out</strong>
											e.g. hiring co-op students to do the website restructure instead of an outside studio
										</li>
										<li><strong>Identifying areas where money is leaving the AMS</strong>
											and could be redirected back to students
										</li>
										<li><strong>Increase funding for student groups</strong>
											by using grants and funding available to non-profit organizations.
										</li>

									</ul>
								</div>
								<div class="tab-pane" id="platform-sustainability">
									<label class="platform-label" >
										The best way to show my stance on sustainability is to share the answers I provided to the UBC Sustainability Collective:
									</label>
									<ul>
										<div><em>1. How do you see sustainability and climate change fitting into the VP Admin portfolio?</em></div>
										<div>&nbsp;</div>
										<div>I'm fortunate that AMS Sustainability falls under the Admin portfolio; as VP Admin, I will prioritize sustainability and not let it get lost among the role's many other responsibilities. By saying in constant communication with the sustainability collective, I will be able to most effectively provide the support needed for us to improve climate change action at UBC.</div>
										<div>&nbsp;</div>
										<div><em>2. How would you rate the AMS's action on climate change thus far? Where would you make improvements?</em></div>
										<div>&nbsp;</div>
										<div>The AMS has done some great work to reduce their own impact on the environment, like the establishment of the sustainability projects fund in 2011 and choosing to build the most sustainable student union building in Canada.</div>
										<div>&nbsp;</div>
										<div>The AMS could do more to work with the various student groups on campus. Consultation has been a hot topic this year, and as VP Admin I will ensure more open communication with the sustainability collective. I will also focus on funding and supporting initiatives that make a positive impact on climate change prevention.&nbsp;</div>
										<div>&nbsp;</div>
										<div><em>3. Outside if this election and this role, why do you personally care about climate change? What does it mean to you?</em></div>
										<div>&nbsp;</div>
										<div>Our environment's health is a lot like our own person health: without it, we can't do much. Climate change is one of the most critical issues facing our society, and I believe that it is my duty as a global citizen to step up and work towards a sustainable future.&nbsp;</div>
										<div>&nbsp;</div>
										<div><em>4. Are you pro/anti the following:&nbsp;</em></div>
										<div><em>a) divestment</em></div>
										<div><em>b) the creation of a climate hub on campus, a physical space to bring together students, professors and staff working on all facets of climate change</em></div>
										<div><em>c) the creation of a sustainability committee under the AMS</em></div>
										<div><em>d) further incorporating climate change in UBC curriculum&nbsp;</em></div>
										<div>&nbsp;</div>
										<div>Generally speaking, I am in support of all of the above.&nbsp;</div>
										<div>&nbsp;</div>
										<div>a) I support investing in environmental, social, and economically sustainable companies.&nbsp;</div>
										<div>b) This seems like a great idea; I am happy to discuss how we can secure funding and buy-in for this project.</div>
										<div>c) I would love to see the AMS work more on issues of climate justice; if the right way to do this is by creating a sustainability committee, let's do it.</div>
										<div>d) UBC introduced CONS 210 - "Visualizing Climate Change" this year (which had every seat filled), which suggests that they are open to moving forward with more widespread climate change education. In high school, I received a significant amount of valuable education on climate change, and together we could share this same information with thousands of other students.</div>
									</ul>
								</div>
								<div class="tab-pane" id="platform-other">
									<label class="platform-label" >
										Other Priorities:
									</label>
									<ul class="platform-ul">
										<li>Supporting a current <a href="https://sustain.ubc.ca/courses-teaching/seeds">SEEDS</a> project developing an app to show available study space on campus (i.e. number of seats available)</li>
										<li>The <a href="https://www.ams.ubc.ca/sustainability/lighter-footprint-strategy/">Lighter Footprint Strategy</a> is in the process of being updated:
											I will support our sustainability office in achieving these goals as set out in the updated plan. Review the previous action plan <a href="http://www.ams.ubc.ca/wp-content/uploads/2016/12/4AMS-Lighter-Footprint-Strategy-Action-Plans-and-Indicators-Mar-10-2008.pdf">here.</a>
										</li>
										<li>Expand on the current offering of the <a href="http://www.ams.ubc.ca/clubs/joining-a-club/slsc/">SLSC</a> by exploring options including:
											<ol>
												<li>An online equipment rental system, possibly integrated with <a href="https://www.campusvibe.ca/campusvibe/campus/cea260f5-8aab-4e11-bccf-fe4a846e62dc">CampusVibe/Clubhouse</a></li>
												<li>Inventory Tracking for rental equipment</li>
												<li>Club advertisements on the TVs</li>
												<li>Extra printing options (posters, flyers, large-format, etc.)</li>
											</ol>
										</li>
										<li>Revising the <a href="http://www.ams.ubc.ca/wp-content/uploads/2018/02/263-18-Policy-I-7_-AMS-Policy-on-Expulsion-from-AMS-Property-Proposal-1.pdf">Expulsion Policy</a> if it has not
											been revised by the time I take office.</li>
											<li>Increasing the usage of the Art Gallery by allowing and encouraging student groups to use it for events</li>



										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Tabs with icons on Card -->
					</div>
					{{--END PLATFORM--}}

					{{--EXPERIENCE--}}
					<div class="col-md-6">
						<div class="title">
							<h3>Experience</h3>
						</div>
						<div class="row-fluid">
							<div class="col-md-4" style="margin-top:30px">
								<p class="experience-label">Inside the AMS</p>
							</div>

							<div class="col-md-8 experience-desc">
								<p style="margin-top:5px">
									- Assistant to the AMS President<br>
									- Safewalk Driver and Shift Supervisor<br>
									- Vice-Chair of Steering Committee
								</p>
							</div>
						</div>
						<div class="row-fluid">
							<div class="col-md-4" style="margin-top:45px">
								<p class="experience-label">Within UBC</p>
							</div>

							<div class="col-md-8 experience-desc" style="margin-top:20px">
								<p style="margin-top:5px">
									- UBC Dance Club Executive<br>
									- Student Leadership Conference Planning Committe
								</p>
							</div>
						</div>

						<div class="row-fluid">
							<div class="col-md-4" style="margin-top:54px">
								<p class="experience-label">External</p>
							</div>

							<div class="col-md-8 experience-desc" style="margin-top:20px">
								<p style="margin-top:5px">
									- Full-Stack Software Developer, Kanekta (e@UBC Startup)<br>
									- System Administrator/Tech Support, Teck Resources
								</p>
							</div>
						</div>
					</div>
					{{--END EXPERIENCE--}}

					<div class="clearfix" style="margin-bottom:40px"></div>



					<div class="clearfix" style="margin-bottom:40px"></div>

					{{--PROFILE--}}
					{{--<div class="col-md-6">
						<div class="title">
							<h3>Profile</h3>
						</div>
						<div class="row-fluid">
							<div class="col-md-4" style="margin-top:30px">
								<p class="experience-label">Inside the AMS</p>
							</div>

							<div class="col-md-8 experience-desc">
								<p style="margin-top:5px">
									- Assistant to the AMS President<br>
									- Safewalk Driver and Shift Supervisor<br>
									- Vice-Chair of Steering Committee
								</p>
							</div>
						</div>
						<div class="row-fluid">
							<div class="col-md-4" style="margin-top:45px">
								<p class="experience-label">Within UBC</p>
							</div>

							<div class="col-md-8 experience-desc" style="margin-top:20px">
								<p style="margin-top:5px">
									- UBC Dance Club Executive<br>
									- Student Leadership Conference Planning Committe
								</p>
							</div>
						</div>

						<div class="row-fluid">
							<div class="col-md-4" style="margin-top:54px">
								<p class="experience-label">External</p>
							</div>

							<div class="col-md-8 experience-desc" style="margin-top:20px">
								<p style="margin-top:5px">
									- Full-Stack Software Developer, Kanekta (e@UBC Startup)<br>
									- System Administrator/Tech Support, Teck Resources
								</p>
							</div>
						</div>
					</div>--}}
					{{--END PROFILE--}}

					{{--ENDORSEMENTS--}}
					<div class="col-md-12 text-center">
						<div class="title">
							<h3>Endorsements</h3>
						</div>

						<?php $columns = 4 ?>
						<?php for($i = 0; $i<$columns; $i++): ?>
							<div class="col-md-3">
								@foreach ($endorsements as $endorsement)
								<?php if ($loop->index % $columns == $i): ?>
									<div class="card card-nav-tabs" style="margin-bottom:15px">
										<div class="header header-{{$endorsement->type == 'individual' ? 'success' : 'primary'}}">
											<div class="nav-tabs-navigation">
												<div class="nav-tabs-wrapper">
													<ul class="nav nav-tabs" data-tabs="tabs">
														<li>
															<h4>{{ucwords($endorsement->individual_name ?? $endorsement->group_name)}}</h4>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="content">
											<div class="tab-content text-center">
												<div class="tab-pane active">
													<p> {!!$endorsement->message!!} </p>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								@endforeach
							</div>
						<?php endfor; ?>



					</div>
					{{--END ENDORSEMENTS--}}
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<nav class="pull-left">
					<ul>

						<li>
							<button type="button" class="btn btn-default " data-toggle="modal" data-target="#myModal">
								Info for nerds
							</button>
						</li>

					</ul>
				</nav>
				<div class="copyright pull-right">
					Thanks for reading all this way! This was a lot of code. Stay awesome!
				</div>
			</div>
		</footer>
	</div>

	<!-- Sart Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<i class="material-icons">clear</i>
					</button>
					<h4 class="modal-title">Technology Stack</h4>
				</div>
				<div class="modal-body">
					<p>
						<ul>
							<li>Server: Amazon EC2 (Ubuntu Linux 16.04)</li>
							<li>Webserver: Nginx</li>
							<li>Database: Amazon RDS (MySQL)</li>
							<li>Backend: PHP with Laravel Framework</li>
							<li>Frontend: Bootstrap Framework</li>
						</ul>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--  End Modal -->


</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">

$().ready(function(){
	// the body of this function is in assets/material-kit.js
	materialKit.initSliders();
	window_width = $(window).width();

	if (window_width >= 992){
		big_image = $('.wrapper > .header');

		$(window).on('scroll', materialKitDemo.checkScrollForParallax);
	}

});
</script>

@endsection
