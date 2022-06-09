var NewComponent = React.createClass({
  render: function() {
    return (
      <div>
        <meta charSet="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
        <meta httpEquiv="X-UA-Compatible" content="ie=edge" />
        <meta name="HandheldFriendly" content="true" />
        <title>professional resume</title>
        <link rel="stylesheet" type="text/css" href="style3.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossOrigin="anonymous" referrerPolicy="no-referrer" />
        <div className="wrapper">
          <div className="border">
            <div className="container">
              <div className="center">
                <div className="name">ALBERT FLORES</div>
                <div className="role">HOTEL HOSPITALITY</div>
              </div>
            </div>
            <div className="container">
              <div className="left_Side">
                <div className="contactinfo">
                  <h3 className="title">Contact </h3>
                  <ul>
                    <li>
                      <span className="text-title">Phone</span>
                      <span className="text">512-829-2263</span>
                    </li>
                    <li>
                      <span className="text-title">Email</span>
                      <span className="text">KarenJ_Mckoy@gmail.com</span>
                    </li>
                    <li>
                      <span className="text-title">Address</span>
                      <span className="text">1168 Brentwood Drive Austin,TX 78701</span>
                    </li>
                  </ul>
                </div>
                <div className="skills">
                  <h2 className="title">Skills</h2>
                  <div className="progressBar">
                    <h3>Point of Sales (POS)</h3>
                    <div className="progressBarContainer">
                      <div className="progressBarValue value-90" />
                    </div>
                  </div>
                  <div className="progressBar">
                    <h3>Microsoft office suite</h3>
                    <div className="progressBarContainer">
                      <div className="progressBarValue value-80" />
                    </div>
                  </div>
                  <div className="progressBar">
                    <h3>Problem Solving</h3>
                    <div className="progressBarContainer">
                      <div className="progressBarValue value-30" />
                    </div>
                  </div>
                  <div className="progressBar">
                    <h3>Team Leadership</h3>
                    <div className="progressBarContainer">
                      <div className="progressBarValue value-70" />
                    </div>
                  </div>
                </div>
                <div className="Achievements">
                  <h2 className="title">Achievements</h2>
                  <div className="box">
                    <div className="text">
                      <p>Outstanding Achievement Award</p>
                    </div>
                    <div className="year_achieve">
                      <h6>2017</h6>
                    </div>
                  </div>
                  <div className="box">
                    <div className="text">
                      <p>Employee of the Month</p>
                    </div>
                    <div className="year_achieve">
                      <h6>2015</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div className="right_Side">
                <div className="about">
                  <h2 className="title">Experiences</h2>
                  <div className="box">
                    <div className="company">
                      <h3>Company Name</h3>
                    </div>
                    <div className="year">
                      <h5>2018- Present</h5>
                    </div>
                    <div className="text">
                      <h4>Event Photographer</h4>
                      <li>Selected and set up appropriate props, backdrops and lighting.</li>
                      <li>Planned and prepared for all on-location and studio shoots.</li>
                    </div>
                  </div>
                  <div className="box">
                    <div className="company">
                      <h3>Company Name</h3>
                    </div>
                    <div className="year"><h5>2016-2018</h5></div>
                    <div className="text">
                      <h4>Event Photographer</h4>
                      <li>Fabricated camera mounts and cases to capture images and protect equipment.</li>
                      <li>Shot photographs in controlled lab, field and remote environments.</li>
                    </div>
                  </div>
                </div>
                <div className="education">
                  <h2 className="title">Education</h2>
                  <ul>
                    <li>
                      <h3>BA in Hospitality Management</h3>
                      <h6>2012-2016</h6>
                      <h5>Harvard University</h5>
                    </li>
                    <li>
                      <h3>High school</h3>
                      <h6>2009-2012</h6>
                      <h5>Dripping Springs High School</h5>
                    </li>
                    <li>
                      <h3>Middle school</h3>
                      <h6>2006-2012</h6>
                      <h5>Sycamore Springs Middle School</h5>
                    </li>
                  </ul>
                </div>
                <div className="references">
                  <h2 className="title">references</h2>
                  <ul>
                    <li>
                      <span className="text-dark">Michael Mikula</span>
                      <span className="role">Photographer Teacher</span>
                    </li>
                    <li>
                      <span className="text-dark">Phone:</span>
                      <span className="text">407-4979-243</span>
                    </li>
                    <li>
                      <span className="text-dark">Email:</span>
                      <span className="text">mmikulajrl@gmail.com</span>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <span className="text-dark">Jenna Mannix</span>
                      <span className="role">Director</span>
                    </li>
                    <li>
                      <span className="text-dark">Phone:</span>
                      <span className="text">855-5555-555</span>
                    </li>
                    <li>
                      <span className="text-dark">Email:</span>
                      <span className="text">jenna.email@email.com</span>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <span className="text-dark">Jenna Mannix</span>
                      <span className="role">Director</span>
                    </li>
                    <li>
                      <span className="text-dark">Phone:</span>
                      <span className="text">855-5555-555</span>
                    </li>
                    <li>
                      <span className="text-dark">Email:</span>
                      <span className="text">jenna.email@email.com</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div></div>
    );
  }
});