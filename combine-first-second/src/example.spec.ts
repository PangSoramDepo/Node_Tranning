//Feature
class FriendsList {
    friends = [];

    addFriend(name) {
        this.friends.push(name);
        this.announceFriendship(name);
    }

    announceFriendship(name) {
        global.console.log(`${name} is now a friend`);
    }

    removeFriend(name) {
        const idx = this.friends.indexOf(name);

        if(idx === -1)
            throw new Error('Friend not found!');

        this.friends.splice(idx,1);
    }
}

//Tests
describe('FriendList', () => {
    let friendList;

    beforeEach(() => {
        friendList = new FriendsList();
    });

    it('initializes friend list',() => {
        expect(friendList.friends.length).toEqual(0);
    });

    it('adds a friend to the list', () => {
        friendList.addFriend('Depo');
        expect(friendList.friends.length).toEqual(1);
    });

    it('announces friendship', () => {
        //Mock Function
        friendList.announceFriendship = jest.fn();

        expect(friendList.announceFriendship).not.toHaveBeenCalled();
        friendList.addFriend('Depo');
        expect(friendList.announceFriendship).toHaveBeenCalledWith('Depo');
    });

    describe('Remove Friend', () => {
        it('removes a friend from the list', () => {
            friendList.addFriend('Depo');
            expect(friendList.friends[0]).toEqual('Depo');
            friendList.removeFriend('Depo');
            expect(friendList.friends[0]).toBeUndefined();
        });

        it('Throw an error as friend does not exist', () => {
            expect(() => friendList.removeFriend('Depo')).toThrow(new Error('Friend not found!'));
        });
    });
});