export const Foo = () => (
  <>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta httpEquiv="X-UA-Compatible" content="ie=edge" />
    <title>professional resume</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossOrigin="anonymous"
      referrerPolicy="no-referrer"
    />
    <a id="saveAsPdfBtn" href="./directory/r1.pdf" download="r1">
      Save as PDF
    </a>
    <div className="container">
      <div className="left_Side">
        <div className="profileText">
          <div className="img">
            <img src="img.jpg" />
          </div>
          <h2>
            Karen J. McKoy
            <br />
            <span>Photographer</span>
          </h2>
        </div>
        <div className="contactinfo">
          <h3 className="title">Contact Info</h3>
          <ul>
            <li>
              <span className="icon">
                <i className="fa fa-phone" aria-hidden="true" />
              </span>
              <span className="text">512-829-2263</span>
            </li>
            <li>
              <span className="icon">
                <i className="fa fa-envelope" aria-hidden="true" />
              </span>
              <span className="text">KarenJ_Mckoy@gmail.com</span>
            </li>
            <li>
              <span className="icon">
                <i className="fa fa-map-marker" aria-hidden="true" />
              </span>
              <span className="text">1168 Brentwood Drive Austin,TX 78701</span>
            </li>
          </ul>
        </div>
        <div className="education">
          <h3 className="title">Education</h3>
          <ul>
            <li>
              <h5>2012-2016</h5>
              <h4>Bachelor Degree in Communication Arts</h4>
              <h4>Harvard University</h4>
            </li>
            <li>
              <h5>2009-2012</h5>
              <h4>High school</h4>
              <h4>Dripping Springs High School</h4>
            </li>
            <li>
              <h5>2006-2012</h5>
              <h4>Middle school</h4>
              <h4>Sycamore Springs Middle School</h4>
            </li>
          </ul>
        </div>
      </div>
      <div className="right_Side">
        <div className="about">
          <h2 className="title2">Experiences</h2>
          <div className="box">
            <div className="year_company">
              <h5>2018- Present</h5>
              <h5>Company Name</h5>
            </div>
            <div className="text">
              <h4>Event Photographer</h4>
              <li>
                Selected and set up appropriate props, backdrops and lighting.
              </li>
              <li>
                Planned and prepared for all on-location and studio shoots.
              </li>
            </div>
          </div>
          <div className="box">
            <div className="year_company">
              <h5>2016-2018</h5>
              <h5>Company Name</h5>
            </div>
            <div className="text">
              <h4>Event Photographer</h4>
              <li>
                Fabricated camera mounts and cases to capture images and protect
                equipment.
              </li>
              <li>
                Shot photographs in controlled lab, field and remote
                environments.
              </li>
            </div>
          </div>
        </div>
        <div className="Achievements">
          <h2 className="title2">Achievements</h2>
          <div className="box">
            <div className="year_achieve">
              <h5>2017</h5>
            </div>
            <div className="text">
              <p>Photoshop Ace</p>
            </div>
          </div>
          <div className="box">
            <div className="year_achieve">
              <h5>2015</h5>
            </div>
            <div className="text">
              <p>Lens Culture portrait awards</p>
            </div>
          </div>
        </div>
        <div className="Skills">
          <h2 className="title2">Skills</h2>
          <div className="box">
            <ul>
              <li> Adobe Photoshop</li>
              <li> Adobe Lightroom</li>
              <li>Creativity</li>
              <li>Adobe illustrator</li>
            </ul>
          </div>
        </div>
        <div className="references">
          <h2 className="title2">references</h2>
          <ul>
            <li>
              <span className="text-dark">Michael Mikula</span>
            </li>
            <li>
              <span className="text">Photographer Teacher</span>
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
            </li>
            <li>
              <span className="text">Director</span>
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
