export const Foo = () => (
  <>
    <meta charSet="utf-8" />
    <title>Creative Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta httpEquiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <style
      dangerouslySetInnerHTML={{
        __html:
          "\n              /*\n                Figma Background for illustrative/preview purposes only.\n                You can remove this style tag with no consequence\n              */\n              body {background: #E5E5E5; }\n            "
      }}
    />
    <div className="wrapper">
      <div className="container">
        <div className="name-box" />
        <span className="name">Karen J. McKoy</span>
      </div>
      <div className="img-con">
        <div className="img-box"></div>
        <div className="img">
          <img src="images/img.jpg" />
        </div>
      </div>
      <div className="email-con">
        <div className="email-box" />
        <span className="email">KarenJ_Mckoy@gmail.com</span>
      </div>
      <div className="contact-con">
        <div className="contact-box" />
        <span className="contact">512-829-2263</span>
      </div>
      <div className="address-con">
        <div className="address-box" />
        <span className="address">1168 Brentwood Drive Austin,TX 78701</span>
      </div>
      <div className="education-box">
        <span className="education-title">Education</span>
        <ul>
          <li>
            <span className="year">2012-2016</span>
            <span className="degree">
              Bachelor Degree in Communication Arts
            </span>
            <span className="institution">Harvard University</span>
          </li>
          <li>
            <span className="year">2009-2012</span>
            <span className="degree">High school</span>
            <span className="institution">Dripping Springs High School</span>
          </li>
        </ul>
      </div>
      <div className="work-con">
        <span className="workexperience">Work Experiences</span>
        <div className="work-box">
          {/*<div class=e1_112>
                <div  class="e1_113"></div>
                <div  class="e1_114"></div>
              </div><div class=e1_115>
                <div  class="e1_116"></div>
                <div  class="e1_117"></div>
                <div  class="e1_118"></div>
                <div  class="e1_119"></div>
              </div>*/}
          <ul>
            <li>
              <span className="year">2018- Present</span>
              <span className="company">Company Name</span>
              <span className="description">
                Selected and set up appropriate props, backdrops and
                lighting.Planned and prepared for all on-location and studio
                shoots.
              </span>
            </li>
            <li>
              <span className="year">2016-2018</span>
              <span className="company">Company Name</span>
              <span className="description">
                Fabricated camera mounts and cases to capture images and protect
                equipment. Shot photographs in controlled lab, field and remote
                environments.
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div className="achievement-con">
        <span className="achievement-title">ACHIEVEMENTS</span>
        <ul>
          <li>
            <span className="year">2017</span>
            <span className="award">Photoshop Ace</span>
          </li>
          <li>
            <span className="year">2015</span>
            <span className="award">Lens Culture portrait awards</span>
          </li>
        </ul>
      </div>
      <div className="reference">
        <span className="references-title">REFFERENCE</span>
        <div className="reference-box">
          <span className="ref-name">Michael Mikula</span>
          <span className="ref-role">Photographer Teacher</span>
          <span className="ref-phone">Phone:407-4979-243</span>
          <span className="ref-email">Email:mmikulajrl@gmail.com</span>
        </div>
        <div className="reference-box">
          <span className="ref-name">Jenna Mannix</span>
          <span className="ref-role">Director</span>
          <span className="ref-phone">Phone:855-5555-555</span>
          <span className="ref-email">Email:jenna.email@email.com</span>
        </div>
      </div>
      <div className="skill-con">
        <span className="skill-title">Skills</span>
        <ul>
          <li> Adobe Photoshop</li>
          <li> Adobe Lightroom</li>
          <li>Creativity</li>
          <li>Adobe illustrator</li>
        </ul>
      </div>
      <div className="e6_94">
        <div className="e1_146"></div>
        <div className="e1_147" />
        <div className="e1_148" />
        <div className="e1_149" />
        <div className="e1_150" />
        <div className="e1_151" />
        <div className="e1_152" />
      </div>
    </div>
  </>
)
