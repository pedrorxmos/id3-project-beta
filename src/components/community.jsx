export const Community = () => {

  const usernames = [
    '@username',
    '@username',
    '@username',
    '@username',
    '@username',
    '@username',
    '@username',
    '@username',
  ];

  return (
    <>
      <div className="community-slider">
        <div className="community-slider-title">
          <h2>Our Comunity</h2>
          <h3>share your #eyeconic look and tag @eyeconbeauty on social media for a chance to be featured!</h3>
        </div>

        <div className="community-slider-wrapper">
          <div className="community-images-slider">
            {
              usernames.map((user) =>
                {
                  return ( 
                    <a href="https://instagram.com" target="_blank" >
                      <img src="https://source.unsplash.com/random/?makeup%20models" alt="username picture" />
                      <span>{user}</span>
                    </a>
                  )
                }
                
              )
            }
          </div>
          <div className="community-slider-bar">
            <div className="community-slider-bar-thumb"></div>
          </div>
        </div>
      </div>
    </>
  )
}