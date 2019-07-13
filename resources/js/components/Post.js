import React, { Component } from 'react';

class Post extends Component {

  render() { 
    return ( 
      <div className="p-2">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Blog Posts</div>

                            <div className="card-body">
                                Hi ya blog
                            </div>
                        </div>
                    </div>
                </div>		  
      </div>
     );
  }
}
 
export default Post;