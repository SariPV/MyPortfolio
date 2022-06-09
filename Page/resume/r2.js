export const Foo = () => (
  <>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta httpEquiv="X-UA-Compatible" content="ie=edge" />
    <title>professional resume</title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossOrigin="anonymous"
      referrerPolicy="no-referrer"
    />
    <div className="container">
      <div className="left_Side">
        <div className="about">
          <span className="icon2">
            <i className="fa fa-briefcase circle-icon2" aria-hidden="true" />
          </span>
          <h2 className="title2">Experiences</h2>
          <hr className="hr" />
          <div className="box">
            <div className="year">
              <h5>2017-2018</h5>
            </div>
            <div className="text">
              <div className="company">Company</div>
              <h4>Web &amp; Graphic Designer</h4>
              <li>
                Company Name gives me a lot, I have worked as a web and graphics
                designer also with WordPress. I have worked for 1 year in this
                company.
              </li>
            </div>
          </div>
          <div className="box">
            <div className="year">
              <h5> 2018-2019 </h5>
            </div>
            <div className="text">
              <div className="company">Company</div>
              <h4>Web|UI|Graphics Designer</h4>
              <li>
                Company Name is very helpful for me. I have worked for 1 year in
                this company like Web, UI/UX, And Graphics designer With some
                WordPress Skills.
              </li>
            </div>
          </div>
        </div>
        <div className="education">
          <span className="icon2">
            <i
              className="fa fa-graduation-cap circle-icon2"
              aria-hidden="true"
            />
          </span>
          <h2 className="title2">Education</h2>
          <hr className="hr" />
          <ul>
            <div className="year">
              <h5>2012-2016</h5>
            </div>
            <li>
              <h4>Bachelor Degree in Communication Arts</h4>
              <h4>Harvard University</h4>
            </li>
            <h5>2009-2012</h5>
            <li>
              <h4>High school</h4>
              <h4>Dripping Springs High School</h4>
            </li>
            <h5>2006-2012</h5>
            <li>
              <h4>Middle school</h4>
              <h4>Sycamore Springs Middle School</h4>
            </li>
          </ul>
        </div>
        <div className="Skills">
          <span className="icon2">
            <i className="fa fa-lightbulb-o circle-icon2" aria-hidden="true" />
          </span>
          <h2 className="title2">Professional Skills</h2>
          <hr className="hr" />
          <div className="skill_list">WEB DESIGN</div>
          <div className="skill_bar">
            <progress value={50} max={100} />
          </div>
          <div className="skill_list">UI/UX DESIGN</div>
          <div className="skill_bar">
            <progress value={70} max={100} />
          </div>
          <div className="skill_list">GRAPHICS DESIGN</div>
          <div className="skill_bar">
            <progress value={40} max={100} />
          </div>
          <div className="skill_list">WORDPRESS</div>
          <div className="skill_bar">
            <progress value={80} max={100} />
          </div>
        </div>
        <div className="references">
          <span className="icon2">
            <i className="fa fa-lightbulb-o circle-icon2" aria-hidden="true" />
          </span>
          <h2 className="title2">references</h2>
          <hr className="hr" />
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
      <div className="right_Side">
        <div className="resume_buttom">
          <div className="resume_namerole">
            <div className="name">AJAY GORECHA</div>
            <div className="role">WEB &amp; GRAPHIC DESIGNER</div>
          </div>
        </div>
        <div className="contactinfo">
          <h3 className="title">Contact</h3>
          <hr className="hr" />
          <ul>
            <li>
              <span className="icon">
                <i className="fa fa-phone circle-icon" aria-hidden="true" />
              </span>
              <span className="text">512-829-2263</span>
            </li>
            <li>
              <span className="icon">
                <i
                  className="fa fa-envelope-o circle-icon"
                  aria-hidden="true"
                />
              </span>
              <span className="text">KarenJ_Mckoy@gmail.com</span>
            </li>
            <li>
              <span className="icon">
                <i
                  className="fa fa-map-marker circle-icon"
                  aria-hidden="true"
                />
              </span>
              <span className="text">1168 Brentwood Drive Austin,TX 78701</span>
            </li>
          </ul>
        </div>
        <div className="Achievements">
          <h2 className="title">Achievements</h2>
          <hr className="hr" />
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
      </div>
    </div>
  </>
)
