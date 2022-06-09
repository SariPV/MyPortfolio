export const Foo = () => (
  <>
    <meta charSet="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no"
    />
    <meta httpEquiv="X-UA-Compatible" content="ie=edge" />
    <meta name="HandheldFriendly" content="true" />
    <title>professional resume</title>
    <link rel="stylesheet" type="text/css" href="style5.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossOrigin="anonymous"
      referrerPolicy="no-referrer"
    />
    <div className="wrapper">
      <div className="container">
        <div className="head">
          <div className="head-right">
            <div className="name">ALBERT FLORES</div>
            <div className="role">HOTEL HOSPITALITY</div>
          </div>
          <div className="head-left">
            <div className="contactinfo">
              <li>
                <span className="text">512-829-2263</span>
                <span className="icon">
                  <i className="fa fa-phone circle-icon" aria-hidden="true" />
                </span>
              </li>
              <li>
                <span className="text">KarenJ_Mckoy@gmail.com</span>
                <span className="icon">
                  <i
                    className="fa fa-envelope-o circle-icon"
                    aria-hidden="true"
                  />
                </span>
              </li>
              <li>
                <span className="text">
                  1168 Brentwood Drive Austin,TX 78701
                </span>
                <span className="icon">
                  <i
                    className="fa fa-map-marker circle-icon"
                    aria-hidden="true"
                  />
                </span>
              </li>
            </div>
          </div>
        </div>
      </div>
      <div className="container">
        <div className="about">
          <h2 className="title">
            Work experiences
            <hr className="hr" />
          </h2>
          <div className="box">
            <div className="left-box">
              <div className="position">
                <h4>Event Photographer</h4>
              </div>
              <div className="year">2018- Present</div>
            </div>
            <div className="right-box">
              <div className="company">Company Name</div>
              <div className="text">
                <li>
                  Selected and set up appropriate props, backdrops and lighting.
                </li>
                <li>
                  Planned and prepared for all on-location and studio shoots.
                </li>
              </div>
            </div>
          </div>
          <div className="box">
            <div className="left-box">
              <div className="position">Event Photographer</div>
              <div className="year">2018- Present</div>
            </div>
            <div className="right-box">
              <div className="company">Company Name</div>
              <div className="text">
                <li>
                  Selected and set up appropriate props, backdrops and lighting.
                </li>
                <li>
                  Planned and prepared for all on-location and studio shoots.
                </li>
              </div>
            </div>
          </div>
        </div>
        <div className="education">
          <h2 className="title">
            Education
            <hr className="hr" />
          </h2>
          <ul>
            <li className="year">2012-2016</li>
            <li className="type">BA in Hospitality Management</li>
            <li className="location">Harvard University</li>
          </ul>
          <ul>
            <li className="year">2009-2012</li>
            <li className="type">High school</li>
            <li className="location">Dripping Springs High School</li>
          </ul>
          <ul>
            <li className="year">2006-2012</li>
            <li className="type">Middle school</li>
            <li className="location">Sycamore Springs Middle School</li>
          </ul>
        </div>
        <div className="skill-achieve">
          <div className="skills">
            <h2 className="title">Skills</h2>
            <div className="progressBar">
              <div className="label">
                <h3>Point of Sales (POS)</h3>
              </div>
              <div className="progressBarContainer">
                <div className="progressBarValue value-90" />
              </div>
            </div>
            <div className="progressBar">
              <div className="label">
                <h3>Microsoft office suite</h3>
              </div>
              <div className="progressBarContainer">
                <div className="progressBarValue value-80" />
              </div>
            </div>
            <div className="progressBar">
              <div className="label">
                <h3>Problem Solving</h3>
              </div>
              <div className="progressBarContainer">
                <div className="progressBarValue value-30" />
              </div>
            </div>
            <div className="progressBar">
              <div className="label">
                <h3>Team Leadership</h3>
              </div>
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
        <div className="references">
          <h2 className="title">References</h2>
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
        </div>
      </div>
    </div>
  </>
)
